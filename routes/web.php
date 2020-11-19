<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('productos/{producto}',[productoController::class,'show']);
