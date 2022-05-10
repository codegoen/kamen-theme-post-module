<?php

namespace Modules\KamenTheme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SettingController extends Controller
{
    public function index()
    {
        return inertia('KamenTheme::setting/index')->title(__('Setting Kamen Theme'));
    }
}
