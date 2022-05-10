<?php

use Illuminate\Support\Facades\Route;
use Modules\KamenTheme\Http\Controllers\KamenThemeController;
use Modules\KamenTheme\Http\Middleware\HandleKamenThemeInertiaRequest;

Route::prefix('/post')->as('post.')->middleware(HandleKamenThemeInertiaRequest::class)->group(function () {
    Route::get('/', fn () => redirect()->route('post.home'));
    Route::get('/home', [KamenThemeController::class, 'post'])->name('home');
    Route::get('/video', [KamenThemeController::class, 'video'])->name('video');
});
