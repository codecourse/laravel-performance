<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\ResponseCache\Middlewares\CacheResponse;

class StatsIndexController extends Controller
{
    public function __invoke()
    {
        return view('stats.index', [
            'posts_count' => Post::count(),
            'users_count' => User::count(),
        ]);
    }
}
