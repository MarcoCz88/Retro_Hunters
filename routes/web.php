<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

// ROTTE GUEST
Route::get('/', [PublicController::class,'welcome'])->name('home');
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

// ROTTE AUTH ANNUNCI
Route::get('/announcement/create',[AnnouncementController::class,'create'])->name('announcement.create')->middleware('auth');
Route::get('/announcement/index',[AnnouncementController::class,'index'])->name('announcement.index');
Route::get('/announcement/show/{announcement}',[AnnouncementController::class,'show'])->name('announcement.show');

// ROTTE REVISORI
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accept/announcement/{announcement}',[RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');
Route::patch('/reject/announcement/{announcement}',[RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');