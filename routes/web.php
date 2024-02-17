<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\GeneralController;

Route::get('/', function (){ return redirect(app()->getLocale()); });

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function (){
    Route::get('/', [GeneralController::class, 'index'])->name('index');
    Route::get('/services/{slug}', [GeneralController::class, 'servicesSingle'])->name('servicesSingle');
    Route::get('/products', [GeneralController::class, 'products'])->name('products');
    Route::get('/products/{slug}', [GeneralController::class, 'productsSingle'])->name('productsSingle');
    Route::get('/portfolio', [GeneralController::class, 'portfolio'])->name('portfolio');
    Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');


    Route::post('/sendEmail', [GeneralController::class, 'sendEmail'])->name('sendEmail');
});
