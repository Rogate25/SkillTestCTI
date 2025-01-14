<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');


Route::get('/subscription/thankyou', function () {
    return view('subscription.thankYou');
})->name('subscription.thankYou');


Route::post('/subscribe', [FormController::class, 'store'])->name('subscribe');



