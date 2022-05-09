<?php

namespace Modules\KamenTheme\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;

class KamenThemeController extends Controller
{
    public function index()
    {
        return Inertia::render('KamenTheme::index');
    }
}
