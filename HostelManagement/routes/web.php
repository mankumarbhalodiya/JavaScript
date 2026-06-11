<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HostelController;

Route::get('/add-hostel', [HostelController::class, 'addData']);
Route::get('/show-hostel', [HostelController::class, 'showData']);
Route::get('/show-hostel', [HostelController::class, 'showData']);