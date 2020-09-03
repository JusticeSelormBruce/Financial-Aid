<?php

namespace App\Http\Controllers;

use App\Account;
use App\Announcement;
use App\Application;
use App\classes\DeleteFile;
use App\classes\openApplication;
use App\Funds;
use App\Grandtotal;
use App\Imports\RegistedImport;
use App\Registed;
use App\Score;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{


    public function AnnouncementIndex()
    {
        $openApplication = new openApplication();
        $announcements = Announcement::orderByDesc('id')->get();
        return view('admin.announcement.index', compact('announcements'));
    }

    public function CreateAnnouncement()
    {
        return view('admin.announcement.create');
    }

    public function StoreAnnouncement()
    {
        $model = new Announcement();
        Announcement::create($model->announcementData());
        return redirect('announcement-index')->with('msg', 'Announcement Created Successfully');
    }

    public function EditAnnouncementIndex($id)
    {
        $data = Announcement::whereId($id)->first();
        return view('admin.announcement.edit', compact('data'));
    }

    public function PatchAnnouncement(Request $request)
    {
        $model = new Announcement();
        $model->updateAnnouncement($request->id);
        return back()->with('msg', 'Announcement Updated Successfully');
    }

    public function UpdateAttachment(Request $request)
    {
        $model = new Announcement();
        $path = $model->getAttachmentPath($request->attachment);
        $model->updateAttachment($request->id, $path);
        return back()->with('msg', 'Announcement Updated Successfully');
    }

    public function DeleteAnnouncement($id)
    {
        Announcement::whereId($id)->delete();
        $delFile = new DeleteFile();
        $delFile->removeFile('Announcement', $id, 'attachment');
        return back()->with('msg', 'Announcement Deleted Successfully');
    }

    public function OpenApplicationIndex()
    {
        $state = Settings::first();
        return view('admin.settings', compact('state'));
    }

    public function OpenApplication(Request $request)
    {
        $state = Settings::first();
        if ($state == null) {
            Settings::create(['status' => $request->status]);
            return back()->with('msg', 'Application Status  changed Successfully');
        } else {

            Settings::whereId(1)->update(['status' => $request->status]);
            return back()->with('msg', 'Application Status  changed Successfully');
        }
    }

    public function registedStudentIndex()
    {
        $studentlist = Registed::all();
        return view('admin.registed.index', compact('studentlist'));
    }
    public function StoreStudentDetails(Request $request)
    {

        $data = $request->validate(
            [
                'file' => 'required|file|mimes:csv,xlsx'
            ]
        );

        Excel::import(new RegistedImport,  request()->file('file'));
        return back()->with('msg', 'Registed Student List Uploaded Successfully');
    }

    public function QuestionnaireIndex()
    {
        return view('admin.questionnaire.index');
    }
    public function incomingApplications()
    {

        $scores = Score::with('student')->orderBy('score')->get();
        return view('admin.application.index', compact('scores'));
    }

    public function Accounts()
    {
        $funds = Funds::all();
        $grandTotal = Grandtotal::sum('amount');
        return view('admin.account.index', compact('funds', 'grandTotal'));
    }

    public function loadFunds(Request $request)
    {
        Funds::create(['amount' => $request->amount, 'user_id' => Auth::id()]);
        $available_fund = Funds::sum('amount');
        Grandtotal::updateOrCreate(['amount' => $available_fund]);
        return back()->with('msg', 'Funds Loaded Successfully');
    }

    public function creditStudentAccountIndex()
    {
        $qualifiedApplicants = Score::where('score', '<=', 350)->get()->all();
        return view('admin.account.qualified_sapplicants', compact('qualifiedApplicants'));
    }

    public function CreditApplicantAccount(Request $request)
    {
        $data = $request->validate(
            ['amount' => "required|numeric"]
        );
        $no_students = Score::where('score', '<=', 350)->count();
        $dispatch_total = $no_students * $data['amount'];
        $this->dispach($dispatch_total, $data['amount']);
        return back()->with('msg', 'Applicants accounts creited successfully');
    }
    public function dispach($dispatch_total, $amount)
    {
        $available_fund = Grandtotal::sum('amount');
        if ($dispatch_total > $available_fund) {
            return back()->with('msg', 'Sorry, Funds not enough to disperse');
        } else {

            $awardes = Score::where('score', '<=', 350)->get();

            foreach ($awardes as $list) {
                $details = ['amount' => $amount, 'registed_id' => $list->student->id, 'user_id' => Auth::id()];

                Account::create($details);
            }
            $value =  $available_fund - $dispatch_total;
            Grandtotal::updateOrCreate(['amount' => $value]);
        }
    }
}
