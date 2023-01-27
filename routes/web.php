<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialRegister;
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
Route::view('/','login')->name('login');
Route::view('/register','register')->name('register');
Route::view('/forgot-password','forgetpass')->name('forget.pass');

Route::controller(LoginController::class)->gorup(function (){
    Route::post('log-action','index')->name('login.action');
    Route::post('/forgot-pass-action','forgetPassAction')->name('forget.pass.action');
    Route::get('/reset-password/{token}','resetPass')->name('reset.pass');
    Route::post('/reset-password-action','changePass')->name('change.pass');
});

Route::controller(SocialRegister::class)->gorup(function (){
  Route::get('g-register','googleRegister')->name('g.register');
  Route::get('g-login','googleLogin')->name('google.login');
  Route::get('/auth/callback/google','googleCallBack');
});

Route::post('reg-action',[RegisterController::class,'index'])->name('reg.action');

Route::get('/dashboard',function(){
  return "hello";
})->middleware('auth-check')->name('dashboard');
