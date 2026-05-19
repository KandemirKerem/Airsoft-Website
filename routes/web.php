<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');})->name('homepage');

Route::get('/ilanlar', function () {
    return view('pages.listings');})->name('listings');

Route::get('/topluluk', function () {
    return view('pages.community'); })->name('community');

Route::get('/hakkimizda', function () {
    return view('pages.about');})->name('about');
