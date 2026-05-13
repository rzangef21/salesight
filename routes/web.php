<?php

use Illuminate\Support\Facades\Route;

// OWNER
Route::get('/owner/dashboard', function () {
    return view('owner.dashboard');
});
