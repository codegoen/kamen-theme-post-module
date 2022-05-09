<?php

use Illuminate\Support\Facades\Route;

Route::prefix('kamentheme')->group(function() {
    Route::get('/', 'KamenThemeController@index');
    Route::get('/video', 'KamenThemeController@video');
});
