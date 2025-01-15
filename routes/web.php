<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    sleep(2);
    return Inertia::render('Home');
});

Route::get('/contact', function () {
    sleep(2);
    return Inertia::render('Contact');
});

Route::get('/settings', function () {
    sleep(2);
    return Inertia::render('Settings');
});