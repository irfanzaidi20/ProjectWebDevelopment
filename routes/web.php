<?php

use Illuminate\Support\Facades\Route;
// route controller new booking
use App\Http\Controllers\StudentController;
// route controller report
use App\Http\Controllers\ReportController;
//route to auth controller login
use App\Http\Controllers\CustomAuthController;


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
    return view('welcome');
});

//home
Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/imam', function () {
    return view('imam');    

});
//route to page add new booking
Route::get('student-list',[StudentController::class,'index']);
//route to page report
Route::get('report-list',[ReportController::class,'index']);
//route to save new booking
Route::post('save-student',[StudentController::class,'saveStudent']);
//route to save report
Route::post('save-report',[ReportController::class,'saveReport']);
//login logout page
Route::get('/login', [CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');;
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class,'logout']);