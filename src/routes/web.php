<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

#Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');

#Route::get('/contact', function () {
#    return view('contact');
#});


Route::get('/contact', [MessageController::class, 'index']);
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');


Route::get('/', function () {
    return view('welcome');
});
