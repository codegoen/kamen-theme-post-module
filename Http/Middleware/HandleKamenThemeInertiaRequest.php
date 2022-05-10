<?php

namespace Modules\KamenTheme\Http\Middleware;

use Inertia\Middleware;
use Illuminate\Http\Request;
use Modules\Post\Entities\Category;

class HandleKamenThemeInertiaRequest extends Middleware
{
    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            'categories' => Category::withCount('posts')->get(),
        ]);
    }
}
