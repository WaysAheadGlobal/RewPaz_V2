<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfessionalControllers;
use App\Http\Controllers\SuperAdminController;
use App\Http\Livewire\Professionals;

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


Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/community', function () {
    return view('community');
});
/** =======================================    Employer Module Start   ================================================ */


Route::get('/signup/employer', [EmployerController::class, 'register'])->name('employer.signup');
Route::post('/signup/employer', [EmployerController::class, 'emprRegistration'])->name('employer.sign-up');
Route::get('/login/employer', [EmployerController::class, 'login'])->name('employer.login');
Route::get('/EmployerGmailLogin', [EmployerController::class, 'EmployerGmailLogin'])->name('employer.EmployerGmailLogin');
Route::post('/login/employer', [EmployerController::class, 'emprLogin'])->name('employer.emprLogin');
Route::get('/employer/subcription/{any}', [EmployerController::class, 'subscribe_plan']);
Route::get('/transcation/plan/{any}/{uid}', [EmployerController::class, 'trans_plan']);
Route::post('/transcation/plan', [EmployerController::class, 'trans_save'])->name('employer.transcation');
Route::get('/transaction/success/{any}', [EmployerController::class, 'trans_succ']);
Route::get('/transaction/unsuccess/{any}', [EmployerController::class, 'trans_unsucc']);
Route::get('/employer/logout', [EmployerController::class, 'logout'])->name('employer.logout');
Route::get('/employer/SendOTP/{any}', [EmployerController::class, 'SendOTP'])->name('employer.SendOTP');
//Route::get('/employer/dashboardsssssss15585888', function(){echo 'prabhat';});
// Route::get('/employer/dashboard', [EmployerController::class, 'dashboard'])->name('employer.dashboard');
Route::group(['middleware' => 'employer'], function () {

    Route::get('/employer', [EmployerController::class, 'index'])->name('employer');
    Route::get('/employer/blog', [EmployerController::class, 'blog'])->name('employer.blog');
    Route::get('/employer/community', [EmployerController::class, 'community'])->name('employer.community');
    Route::get('/employer/dashboard', [EmployerController::class, 'dashboard'])->name('employer.dashboard');
    Route::get('/employer/profile', [EmployerController::class, 'profile'])->name('employer.profile');
    Route::post('/employer/profile', [EmployerController::class, 'profile_update'])->name('employer.profile.update');
    Route::post('/employer/tokens', [EmployerController::class, 'tokens_sent'])->name('employer.tokens.sent');
    Route::post('/employer/empUpdate', [EmployerController::class, 'empUpdate'])->name('employer.empUpdate');
    Route::get('/employer/subscription', [EmployerController::class, 'subscription'])->name('employer.subscription');
    Route::get('/employer/all-plans', [EmployerController::class, 'subscription_plan'])->name('employer.subscription_plan');
    Route::get('/employer/payment-page/{PID}', [EmployerController::class, 'PaymentPage'])->name('employer.PaymentPage');
    Route::get('/employer/CheckOrderStatus', [EmployerController::class, 'CheckOrderStatus'])->name('employer.CheckOrderStatus');
    Route::post('/employer/CreateOrder', [EmployerController::class, 'CreateOrder'])->name('employer.CreateOrder');
    Route::get('/employer/addemp', [EmployerController::class, 'add_emp'])->name('employer.addemp');
    Route::post('/employer/addemp', [EmployerController::class, 'save_emp'])->name('employer.saveemp');
    Route::get('/employer/notification', [EmployerController::class, 'notification'])->name('employer.notification');
    Route::get('/employer/EmployeeStatus', [EmployerController::class, 'EmployeeStatus'])->name('employer.EmployeeStatus');
    Route::get('/employer/EmployeeTokenRevoke', [EmployerController::class, 'EmployeeTokenRevoke'])->name('employer.EmployeeTokenRevoke');
    Route::get('/employer/token-utilization', [EmployerController::class, 'TokenUtilization'])->name('employer.TokenUtilization');
    Route::post('/employer/GetTokenUtilization', [EmployerController::class, 'GetTokenUtilization'])->name('employer.GetTokenUtilization');

    Route::get('/employer/token-requested', [EmployerController::class, 'TokenRequested'])->name('employer.TokenRequested');
    Route::post('/employer/GetTokenRequested', [EmployerController::class, 'GetTokenRequested'])->name('employer.GetTokenRequested');
    Route::get('/employer/token-assigned', [EmployerController::class, 'TokenAssigned'])->name('employer.TokenAssigned');
    Route::post('/employer/GetTokenAssigned', [EmployerController::class, 'GetTokenAssigned'])->name('employer.GetTokenAssigned');
    Route::get('/employer/payment-history', [EmployerController::class, 'PaymentHistory'])->name('employer.PaymentHistory');

});



/** =======================================    Employer Module End   ================================================ */

/** =======================================    Employee Module Start   ================================================ */

Route::get('/signup/employee', [EmployeeController::class, 'register'])->name('employee.signup');
Route::post('/signup/employee', [EmployeeController::class, 'empRegistration'])->name('employee.sign-up');
Route::get('/employee/suggestion/{any}', [EmployeeController::class, 'suggestion']);
Route::post('/employee/suggestion', [EmployeeController::class, 'save_suggestion'])->name('employee.save.suggestion');
Route::get('/login/employee', [EmployeeController::class, 'login'])->name('employee.login');
Route::post('/login/employee', [EmployeeController::class, 'empLogin'])->name('employee.empLogin');
Route::get('/employee/logout', [EmployeeController::class, 'logout'])->name('employee.logout');
Route::get('/employee/SendOTP/{any}', [EmployeeController::class, 'SendOTP'])->name('employer.SendOTP');
Route::group(['middleware' => 'employee'], function () {
    Route::get('/employee/suggestion/{any}', [EmployeeController::class, 'suggestion']);
    Route::post('/employee/suggestion', [EmployeeController::class, 'save_suggestion'])->name('employee.save.suggestion');
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
    Route::get('/employee/blog', [EmployeeController::class, 'blog'])->name('employee.blog');
    Route::get('/employee/community', [EmployeeController::class, 'community'])->name('employee.community');
    Route::get('/employee/professional-lists', [EmployeeController::class, 'professional_lists'])->name('employee.professional.lists');
    Route::get('/employee/profile', [EmployeeController::class, 'profile'])->name('employee.profile');
    Route::post('/employee/profile', [EmployeeController::class, 'profile_update'])->name('employee.profile.update');
    Route::get('/employee/tokens', [EmployeeController::class, 'tokens'])->name('employee.tokens');
    Route::post('/employee/tokens', [EmployeeController::class, 'tokens_raise'])->name('employee.tokens.raise');
    Route::get('/employee/professionals', function () {
        // return 'hello';
        return view('employee.professionals'); // livewire testing purpose
    });

    Route::get('/employee/professional/{any}', [EmployeeController::class, 'professional_details'])->name('employee.professional.details');
    Route::get('/employee/appointment-done', function(){
        return view('employee.appointment-done');
    });

    Route::get('/employee/appointments', [EmployeeController::class, 'appointments'])->name('employee.appointments');
    Route::get('/employee/notification', [EmployeeController::class, 'notification'])->name('employee.notification');
    Route::get('/employee/conversation/{any}', [EmployeeController::class, 'chat_individual']);
    Route::get('/employee/journals/{action}/{any}', [EmployeeController::class, 'journals']);
    Route::get('/employee/chat-room', [EmployeeController::class, 'chat_room'])->name('employee.chatroom');
});



/** =======================================    Employee Module End   ================================================ */

/** =======================================    Professional Module Start   ============================================= */

Route::get('/signup/professional', [ProfessionalControllers::class, 'register'])->name('professional.signup');
Route::post('/signup/professional', [ProfessionalControllers::class, 'profRegistration'])->name('professional.sign-up');
Route::get('/login/professional', [ProfessionalControllers::class, 'login'])->name('professional.login');
Route::post('/login/professional', [ProfessionalControllers::class, 'profLogin'])->name('professional.profLogin');
Route::get('/professional/vetting/{any}', [ProfessionalControllers::class, 'profVetting']);
Route::post('/professional/vetting', [ProfessionalControllers::class, 'saveVetting'])->name('professional.vetting');
Route::get('/professional/thanku/{any}', [ProfessionalControllers::class, 'profThanku']);
Route::group(['middleware' => 'professional'], function () {
    Route::get('/professional/profile', [ProfessionalControllers::class, 'profile'])->name('professional.profile');
    Route::get('/professional/edit-profile', [ProfessionalControllers::class, 'EditProfile'])->name('professional.EditProfile');
    Route::post('/professional/UpdateProfile', [ProfessionalControllers::class, 'UpdateProfile'])->name('professional.UpdateProfile');
    Route::get('/professional/appointments', [ProfessionalControllers::class, 'appointments'])->name('professional.appointments');
Route::get('/professional/group-session', [ProfessionalControllers::class, 'group_Session'])->name('professional.groupSession');
    Route::get('/professional/earning', [ProfessionalControllers::class, 'earning'])->name('professional.earning');
    Route::get('/professional/addAccount', [ProfessionalControllers::class, 'addAccount'])->name('professional.addAccount');
    Route::get('/professional/widrawal', [ProfessionalControllers::class, 'widrawal'])->name('professional.widrawal');
    Route::get('/professional/verifyAccount', [ProfessionalControllers::class, 'verifyAccount'])->name('professional.verifyAccount');
    Route::post('/professional/addAccountDetails', [ProfessionalControllers::class, 'addAccountDetails'])->name('professional.addAccountDetails');
    Route::post('/professional/widrawalAmount', [ProfessionalControllers::class, 'widrawalAmount'])->name('professional.widrawalAmount');
    Route::post('/professional/verifyAccountDetails', [ProfessionalControllers::class, 'verifyAccountDetails'])->name('professional.verifyAccountDetails');
   // Route::get('/professional/feedback', [ProfessionalControllers::class, 'feedback'])->name('professional.feedback');
    Route::get('/professional/tokens', [ProfessionalControllers::class, 'tokens'])->name('professional.tokens');
    Route::get('/professional/notification', [ProfessionalControllers::class, 'notification'])->name('professional.notification');
    Route::get('/professional/conversation/{any}', [ProfessionalControllers::class, 'chat_individual']);
    Route::get('/professional/chat-room', [ProfessionalControllers::class, 'chat_room'])->name('professional.chatroom');
    Route::get('/professional/create-note/{any}', [ProfessionalControllers::class, 'create_note']);
    Route::get('/professional/feedbacks', [ProfessionalControllers::class, 'feedbacks'])->name('professional.feedbacks');
    Route::get('/professional/group-session-list', [ProfessionalControllers::class, 'group_session_list'])->name('professional.grooupsessionlist');
    Route::post('/professional/StatusChange', [ProfessionalControllers::class, 'StatusChange'])->name('professional.StatusChange');


});
Route::get('/professional/logout', [ProfessionalControllers::class, 'logout'])->name('professional.logout');
Route::get('/professional/SendOTP/{any}', [ProfessionalControllers::class, 'SendOTP'])->name('employer.SendOTP');
/** =======================================     Professional Module End   ============================================= */

/** =======================================    Admin Module Start   ============================================= */

Route::get('/login/admin', [AdminController::class, 'login'])->name('admin.login');
Route::post('/login/admin', [AdminController::class, 'adminLogin'])->name('admin.adminLogin');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/vettinglists', [AdminController::class, 'vettinglists'])->name('admin.vettinglists');
    Route::get('/admin/vettinglist/{any}', [AdminController::class, 'vettinglist']);
    Route::post('/admin/vettinglist/status-update', [AdminController::class, 'status_update']);
    Route::post('/admin/vettingread', [AdminController::class, 'vettingread'])->name('admin.vettingread');
    Route::get('/admin/appointments', [AdminController::class, 'appointments'])->name('admin.appointments');
    Route::get('/admin/payments', [AdminController::class, 'payments'])->name('admin.payments');
    Route::get('/admin/notification', [AdminController::class, 'notification'])->name('admin.notification');
    Route::get('/admin/professional-availability', [AdminController::class, 'prof_avb'])->name('admin.professional.availability');
    Route::post('/admin/ProfessionalStatusChange', [AdminController::class, 'ProfessionalStatusChange'])->name('admin.ProfessionalStatusChange');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});


/** =======================================     Admin Module End   ============================================= */

/** =======================================   Super Admin Module Start   ============================================= */

Route::get('/login/super-admin', [SuperAdminController::class, 'login'])->name('super.admin.login');
Route::post('/login/super-admin', [SuperAdminController::class, 'superLogin'])->name('super.superLogin');
Route::group(['middleware' => 'superadmin'], function () {
    Route::get('/super-admin/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
    Route::get('/super-admin/appointments', [SuperAdminController::class, 'appointments'])->name('superadmin.appointments');
    Route::get('/super-admin/notification', [SuperAdminController::class, 'notification'])->name('superadmin.notification');
    Route::get('/super-admin/payments', [SuperAdminController::class, 'payments'])->name('superadmin.payments');
    Route::get('/super-admin/logout', [SuperAdminController::class, 'logout'])->name('super.admin.logout');
});


/** =======================================    Super Admin Module End   ============================================= */



Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return 'Application Routes:Cache cleared';
});
Route::get('/cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
Route::get('/route', function () {
    $exitCode = Artisan::call('route:clear');
    return 'Application route cleared';
});
Route::get('/config', function () {
    $exitCode = Artisan::call('config:clear');
    return 'Application config cleared';
});
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize:clear');
    return 'Application All(compile, events, views, congig, route) cache cleared successfully';
});

