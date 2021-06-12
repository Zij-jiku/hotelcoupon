<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GetcouponController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// GetcouponController Route
Route::resource('getcoupon', GetcouponController::class)->only(['index', 'store', 'edit', 'update','destroy']);

// FrontendController Route
Route::get('/coupon-page', [FrontendController::class , 'couponpage'])->name('couponpage');
Route::get('/home-page', [FrontendController::class , 'homepage'])->name('homepage');

Route::get('file/download/{user_id}', [FrontendController::class , 'downloadinvoice'])->name('filedownload');


// ContactController Route
Route::resource('contact', ContactController::class)->only(['index', 'store', 'edit', 'update','destroy']);

