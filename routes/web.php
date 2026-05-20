<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');})->name('homepage');

Route::get('/ilanlar', [ListingController::class,'index'])->name('listings.index');
Route::get('/ilanlar/{listing:slug}', [ListingController::class, 'show'])->name('listings.show');

Route::get('/topluluk', function () {
    return view('pages.community'); })->name('community');

Route::get('/hakkimizda', function () {
    return view('pages.about');})->name('about');
