<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})-> name('home');

Route::get('/announcement/create',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');
