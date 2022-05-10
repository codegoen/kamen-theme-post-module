<?php

use Illuminate\Support\Facades\Route;
use Modules\KamenTheme\Http\Controllers\SettingController;
use Modules\KamenTheme\Http\Controllers\KamenThemeController;
use Modules\KamenTheme\Http\Middleware\HandleKamenThemeInertiaRequest;

Route::prefix('dashboard')->as('dashboard.kamen-theme.')->group(function () {
    Route::get('/kamen-theme/setting', [SettingController::class, 'index'])->name('setting.index');
});

Route::prefix('/post')->as('post.')->middleware(HandleKamenThemeInertiaRequest::class)->group(function () {
    Route::get('/', fn () => redirect()->route('post.home'));
    Route::get('/home', [KamenThemeController::class, 'post'])->name('home');
    Route::get('/video', [KamenThemeController::class, 'video'])->name('video');
});
