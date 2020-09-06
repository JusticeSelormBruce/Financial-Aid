<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ApplicantController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', 'MainController@dashboard');

Route::get('admin/assign-privilege-index', 'MainController@AssignPrivilegeIndex');
Route::get('admin/assign-privilege-form', 'MainController@AssignPrivilegeForm');
Route::post('admin/assign-privilege', 'MainController@AssignPrivilege');
Route::post('admin/get-user-roles', 'MainController@getUserRoles')->name('get.user.roles');
Route::get('admin/user-accounts-index', 'MainController@UserAccountsIndex');
Route::post('admin/register-user', 'MainController@RegisterUser');



//Reset User Password Route Start
Route::get('admin/reset-password', 'MainController@resetPasswordIndex');
Route::post('reset-password', 'MainController@resetPassword');

//Change User Password
Route::get('change-password-index', 'MainController@changePasswordIndex');
Route::post('change-password', 'MainController@changePassword');


Route::get('announcement-index','AdminController@AnnouncementIndex')->name('announcement');
Route::get('create-announcement','AdminController@CreateAnnouncement')->name('create_announcement');
Route::post('store-announcement','AdminController@StoreAnnouncement')->name('announcement.store');
Route::get('edit-announcement-index/{id}','AdminController@EditAnnouncementIndex')->name('announcement.edit');
Route::get('delete-announcement-index/{id}','AdminController@DeleteAnnouncementIndex')->name('announcement.delete');
Route::post('patch-announcement','AdminController@PatchAnnouncement')->name('announcement.patch');
Route::post('update-attachment','AdminController@UpdateAttachment')->name('attachment.update');
Route::get('delete-announcement/{id}','AdminController@DeleteAnnouncement')->name('announcement.delete');
Route::get('admin/settings','AdminController@OpenApplicationIndex');
Route::post('admin/change-application-status','AdminController@OpenApplication');
Route::get('admin/questionnaires-index','AdminController@QuestionnaireIndex');
Route::get('admin/registed-index','AdminController@registedStudentIndex');
Route::post('/upload-student-list', 'AdminController@StoreStudentDetails');
Route::get('/applicant/loginpage','ApplicantController@login');
Route::post('/login-applicant','ApplicantController@applicantLogin');
Route::get('/applicant-dashboard','ApplicantController@applicantDashboard');
Route::get('applicant-announcement-page','ApplicantController@announcements');
Route::get('/application-check-index','ApplicantController@applicationCheckIndex');
Route::post('/submit-questionnaire','ApplicantController@submitQuestionnaire');
Route::get('incoming-applications','AdminController@incomingApplications');
Route::get('/my-application','ApplicantController@myApplications');
Route::get('/my-account','ApplicantController@myAccount');
Route::get('/admin/accounts','AdminController@Accounts');
Route::post('/admin/load-funds','AdminController@loadFunds');
Route::get('admin/creadit-student-account-index','AdminController@creditStudentAccountIndex');
Route::post('admin/credit-applicant-aacount','AdminController@CreditApplicantAccount');
Route::post('/preview','ApplicantController@preview');
Route::get('/student-form','ApplicantController@studentForm');
Route::post('/save-student-details','ApplicantController@storeStudentDetails');
//
