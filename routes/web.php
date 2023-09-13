<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;


Route::get('/', [PublicController::class,'welcome'])->name('home');
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');


Route::get('/announcement/create',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');
Route::get('/announcement/index',[AnnouncementController::class,'index'])->name('announcement.index');
Route::get('/announcement/show/{announcement}',[AnnouncementController::class,'show'])->name('announcement.show');