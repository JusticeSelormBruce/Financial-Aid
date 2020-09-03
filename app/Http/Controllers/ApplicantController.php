<?php

namespace App\Http\Controllers;

use App\Account;
use App\Announcement;
use App\Application;
use App\Registed;
use App\Score;
use App\Settings;
use App\Temp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ApplicantController extends Controller
{
    public function login()
    {
        return view('applicant.login');
    }
    public function applicantLogin(Request $request)
    {

        $result =  Registed::where('index_number', $request->index_number)->get()->all();

        if ($result == null) {
            return back()->with('msg', 'Sorry, you have not registered for this semester hence cant apply');
        } else {

            if (Hash::check($request['password'], $result[0]->password)) {
                Session::put('applicant', $result[0]->id);
                return redirect('applicant-dashboard');
            } else {
                return back()->with('msg', 'Invalid Password');
            }
        }
    }
    public function applicantDashboard()
    {


        return view('applicant.dashboard');
    }

    public function  announcements()
    {
        $announcements = Announcement::orderByDesc('id')->get();
        return view('applicant.announcement', compact('announcements'));
    }
    public function applicationCheckIndex()
    {
        $applicant_id = Session::get('applicant');
        $application_status =  Settings::first();
        if ($application_status->status == 0) {
            return back()->with('msg', 'Sorry, Application is currenly closed');
        } else {

            $applicant = Registed::whereId($applicant_id)->first();
            $score = Score::where('registed_id', $applicant->id)->first();
            return view('applicant.form', compact('applicant', 'score'));
        }
    }
    public function preview(Request $request)
    {
        $data = $request->except(['_token']);
        $applicant_id = Session::get('applicant');
        foreach ($data as $item) {
            Temp::create(['key' => $item, 'registed_id' => $applicant_id]);
        }
        $previews  = Temp::where('registed_id', $applicant_id)->get()->all();
        return  view('applicant.preview', compact('previews'));
    }
    public function submitQuestionnaire(Request $request)
    {

        $applicant_id = Session::get('applicant');
        $applicant = Registed::whereId($applicant_id)->first();
        $data = $request->except('_token');
        $data = implode(',', $data);
        $result =  json_decode('[' . $data . ']', true);
        $optimum_score = 100 *  sizeof($result);
        $score = 0;
        for ($x = 0; $x < sizeof($result); $x++) {
            $score =  $score + $result[$x];
        }
        Score::create(['score' => $score, 'registed_id' => $applicant->id]);
        Application::create(['reason' => "apllication is in process", 'registeds_id' => $applicant->id]);

        return redirect('my-application');
    }

    public function myApplications()
    {
        $applicant_id = Session::get('applicant');
        $myapplication = Application::with('student')->where('registeds_id', $applicant_id)->get()->all();
        $myscore = Score::where('registed_id', $applicant_id)->get(['score'])->first();

        return view('applicant.my_application', compact('myapplication', 'myscore'));
    }

    public function myAccount()
    {
        $applicant_id = Session::get('applicant');
        $account = Account::where('registed_id', $applicant_id)->get();
        return view('applicant.account', compact('account'));
    }
}
