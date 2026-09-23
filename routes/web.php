<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::get('/jadwal', [ScheduleController::class, 'index'])
    ->name('jadwal.index');

Route::get('/jadwal/{hari}', [ScheduleController::class, 'show']);