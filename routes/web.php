<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/wellcome', function () {
    return view('welcome');
});

Route::get('/', [SiteController::class, 'index']);