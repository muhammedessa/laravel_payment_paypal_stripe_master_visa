<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PapPalController;

 

Route::get('/', function () {
    return view('welcome');
});

Route::get('go-payment', [PapPalController::class, 'goPayment'])->name('payment.go');

Route::get('payment',[PapPalController::class, 'payment'])->name('payment');
Route::get('cancel',[PapPalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PapPalController::class, 'success'])->name('payment.success');