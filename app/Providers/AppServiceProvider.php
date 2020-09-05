<?php

namespace App\Providers;

use App\Country;
use App\Registed;
use App\Score;
use App\Survey;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $value = Session::get('applicant');
            $result = Registed::whereId($value)->get()->all();
            if($result == null){
                $applicant = null;
            }else{

                $applicant =$result[0];
            }
            $links = Session::get('routes');
            $admin = Session::get('admin');
            $qualified = Score::where('score','<=',350)->get();
            $survey = Survey::with(['labels','values'])->get()->all();
            $countries  = Country::all();
            $date = Carbon::now();
            $view->with(compact('links', 'admin','applicant','qualified','survey','countries','date'));
        });
    }
}
