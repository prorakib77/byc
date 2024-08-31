<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationListController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/donate', [FrontendController::class, 'donate'])->name('donate');
Route::resource('donation', DonationListController::class);

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactPost'])->name('contact.post');

Route::get('/volunteer', [FrontendController::class, 'volunteer'])->name('volunteer');
Route::post('/volunteer/post', [VolunteerController::class, 'volunteerPost'])->name('volunteer.post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// bkash payment 
Route::get('/bkash/create-payment', [App\Http\Controllers\BkashController::class,'createPayment'])->name('bkash-create-payment');
Route::get('/bkash/callback', [App\Http\Controllers\BkashController::class,'callBack'])->name('bkash-callBack');