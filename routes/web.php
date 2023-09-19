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
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/announcement/{announcement}',[RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
Route::patch('/reject/announcement/{announcement}',[RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
Route::patch('/undo/announcement/{announcement}',[RevisorController::class, 'undoAnnouncement'])->middleware('isRevisor')->name('revisor.undo_announcement');

//ROTTE CANDIDATURE
Route::get('/become/revisor', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}',[RevisorController::class, 'makeRevisor'])->name('make.revisor');

// ROTTE RICERCHE ANNUNCI
Route::get('/search/announcement', [PublicController::class,'searchAnnouncements'])->name('announcements.search');

//ROTTE LINGUA
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');