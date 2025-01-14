<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/ThankYou', function () {
    return view('thankYou');
});

Route::get('/subscription/thankyou', function () {
    return view('subscription.thankYou');
})->name('subscription.thankYou');


Route::post('/subscribe', [FormController::class, 'store'])->name('subscribe');
