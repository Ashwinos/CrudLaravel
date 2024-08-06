<?php

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/create',[ProductCategoryController::class, 'create'])->name('create');
Route::get('/update',[ProductCategoryController::class, 'update'])->name('update');
