<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::post("/check", [MainController::class, "check"])->name("check");

Route::get("/switch", function () {
    return view("switch", ["inputs" => array('a', 'b', 'c','d')]);
});
