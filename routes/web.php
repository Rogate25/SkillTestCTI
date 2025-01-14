<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/thank-you', function () {
    return view('thanks');
})->name('thank-you');


Route::post('/subscribe', [FormController::class, 'store'])->name('subscribe');



