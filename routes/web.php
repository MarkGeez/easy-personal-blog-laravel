<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

//guest route

Route::get('/home', [GuestController::class, 'show']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AdminController::class, 'login']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('', [AdminController::class, 'display'])->name('views.admin');
    Route::get('/add', function(){
        return view('add');
    });
    Route::post('/add', [AdminController::class, 'add'])->name('add.admin');

    Route::get('/update/{id}', [AdminController::class,'viewUpdate'])->name('update.admin');
    Route::put('/update/{id}', [AdminController::class,'submitUpdate'])->name('submit.update');
    Route::delete('/{id}', [AdminController::class,'delete'])->name('delete.blog');
});



