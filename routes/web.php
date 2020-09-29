<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/email', function () {
    return $this->markdown('email');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/send',[MailController::class,'sendMail'])->name('send');

