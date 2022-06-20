<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Organ;
use App\Http\Controllers\Messages;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\CompatibleController;


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
    return view('Home');
});

//login and signup routes
Route::post('/login', [Authentication::class, 'authenticate']);
Route::view('/login', 'login');
Route::post('/signup', [Authentication::class, 'registerPatient']);
Route::view('/signup', 'registration');
//end of login and signup routes

//admin side routes
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/adminregister', [Authentication::class, 'registerAdmin']);
Route::get('/adminregister', [AdminController::class, 'adminRegistrationShow']);

Route::post('/admin/{admin_id}', [HospitalController::class, 'create']);
Route::get('/patientlist', [AdminController::class, 'listPatients']);
Route::get('/compatibles', [CompatibleController::class, 'showCompatibleRecipients']);
Route::get('/donors', [CompatibleController::class, 'showCompatibleDonors']);
Route::get('/compatibles/{compatible}/{newStatus}', [CompatibleController::class , 'changeStatus']);
Route::get('/patient{patient_ic}', [AdminController::class, 'patientInfoShow']);
//end of admin side routes

Route::get('index', [Authentication::class, 'index']);
//Route::view('reqOrgan','RequestedOrgan');
//Route::view('donateOrgan','DonateOrgan');
// Route::view('status','Status');
//Route::view('setting','setting');
// Route::view('profile','PatientProfile');

Route::get('profile', [Authentication::class, 'show'])->name('profile');
Route::get('reqOrgan', [Authentication::class, 'reqOrganShow'])->name('reqOrgan');
Route::get('donateOrgan', [Authentication::class, 'donateOrganShow'])->name('donateOrgan');
Route::post('ReqOrgan', [Organ::class, 'ReqOrgan']);
// Route::get('status', [Organ::class, 'status'])->name('status');
Route::get('SettingShow', [Authentication::class, 'SettingShow'])->name('SettingShow');
Route::post('ChangePass', [Authentication::class, 'ChangePass']);
Route::get('logout', [Authentication::class, 'logout']);
Route::post('DonOrgan', [Organ::class, 'DonOrgan']);
// Route::view('message', 'patientMessage');
Route::post('message', [Messages::class, 'message']);

Route::get('PatientMessagee', [Messages::class, 'Messageshow'])->name('PatientMessagee');
Route::get('AdminView', [Messages::class, 'messageshowadmin'])->name('AdminView');
Route::view('forgotpass','forgotPassword');
Route::post('forgotpass', [Authentication::class, 'forgotpass']);
Route::post('ForgotPassChange', [Authentication::class, 'ForgotPassChange']);
Route::get('index', [Organ::class, 'profilestatus'])->name('index');


Route::get('UpdateProfile', [PatientController::class, 'Updateshow'])->name('UpdateProfile');
Route::post('UpdateProfile', [PatientController::class, 'UpdateProfile']);

