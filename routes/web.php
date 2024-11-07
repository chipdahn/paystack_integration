<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


Route::get('/pay', [PaymentController::class, 'showPaymentForm'])->name('pay.form');
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('payment.callback');


Route::get('/', function(){
dd('yes');
});