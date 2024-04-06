<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ebay/auth', [App\Http\Controllers\EbayController::class, 'auth'])->name('ebay.auth');
Route::get('/ebay/callback', 'EbayController@callback')->name('ebay.callback');