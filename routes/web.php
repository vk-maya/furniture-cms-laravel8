<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function(){
    Route::view('/dashboard','admin.dashboard')->name('dashboard');
    Route::view('/category','admin.category')->name('category');
    Route::post('/store-category', [CategoryController::class,'storeCategory'])->name('savecategory');
});