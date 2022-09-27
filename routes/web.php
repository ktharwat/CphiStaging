<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\ContactUsFormController;
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
    return view('home');
});
// Route::get('/', [ContactUsFormController::class, 'createForm']);

Route::post('/', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

// Route::get('contact-us', [SendEmailController::class,'getContact']);
// Route::post('contact-us', [SendEmailController::class,'saveContact']);