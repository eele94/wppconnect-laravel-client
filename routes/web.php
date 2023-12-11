<?php

use Eele94\Wppconnect\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;

Route::name('wppconnect.')->prefix('wppconnect')->group(function () {
    Route::post('webhook', [WebhookController::class, 'store'])->name('webhook.store');
});
