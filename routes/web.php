<?php

use Illuminate\Support\Facades\Route;
use Pdik\LaravelExactOnline\Http\Controllers\ExactOnlineController;

Route::prefix('exactonline')->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/settings',
            [ExactOnlineController::class, 'index'])->name('exact-online.index');
        Route::post('webhook', [ExactOnlineController::class, 'setWebhook'])->name('exact-online.set-webhook');
    });
});
