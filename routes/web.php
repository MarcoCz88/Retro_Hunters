<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;


Route::get('/', function () {
    return view('welcome');
})-> name('home');

Route::get('/announcement/create',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');
