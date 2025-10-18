<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LpController;

Route::get('/', [LpController::class, 'lp']);

// Route::get('/', function () {
//     return view('welcome');
// });
