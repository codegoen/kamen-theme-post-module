<?php

namespace Modules\KamenTheme\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Routing\Controller;

class KamenThemeController extends Controller
{
    public function post()
    {
        return Inertia::render('KamenTheme::index');
    }

    public function video()
    {
        return Inertia::render('KamenTheme::video');
    }
}
