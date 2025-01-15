<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});