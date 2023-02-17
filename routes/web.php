<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware'=>'guest'],function(){
Route::get('/login',[\App\Http\Controllers\AuthController::class,'index'])->name('login');
Route::post('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login')->middleware('throttle:2,1');
Route::get('/register',[\App\Http\Controllers\AuthController::class,'register_view'])->name('register');
Route::post('/register',[\App\Http\Controllers\AuthController::class,'register'])->name('register');
});

Route::group(['middleware'=>'auth'],function(){
Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::get('/home',[\App\Http\Controllers\AuthController::class,'home'])->name('home');
});
