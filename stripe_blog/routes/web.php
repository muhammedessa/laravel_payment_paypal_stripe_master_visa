<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StripePaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('stripe', [StripePaymentController::class , 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

