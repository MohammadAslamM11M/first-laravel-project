<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

// Route::get("/", [PageController::class, "home"]);

// Route::get("/about", [PageController::class, "about"]);

Route::resource('posts', PostController::class);

Route::get("/test-db", function () {
    $users = DB::select('SELECT * FROM users');
    return $users;
});