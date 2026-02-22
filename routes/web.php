<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StageController;
use Illuminate\Support\Facades\Route;

// Dashboard Routes
Route::group(['prefix' => '', 'as' => 'dashboard.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/result', [DashboardController::class, 'result'])->name('result');
});

// Project/Stage Routes
Route::group(['prefix' => 'project', 'as' => 'project.'], function () {
    Route::get('/stage1', [StageController::class, 'stage1'])->name('stage1');
    Route::get('/stage2', [StageController::class, 'stage2'])->name('stage2');
    Route::get('/stage3', [StageController::class, 'stage3'])->name('stage3');
    Route::get('/stage4', [StageController::class, 'stage4'])->name('stage4');
});
