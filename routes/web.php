<?php

use App\Http\Controllers\MailController;
use App\Mail\WelcomeMail;
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

Route::get('/email', function() {
    return new \App\Mail\WelcomeMail();
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/send',[MailController::class,'teste'])->name('send');

