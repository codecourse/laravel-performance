<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $posts = cache()->tags(['posts'])->remember('home.posts.user.' . $request->user_id . '.page.' . $request->page, 60 * 10, function () use ($request) {
            return Post::query()
                ->select('id', 'title', 'slug', 'teaser', 'user_id')
                ->with('user:id,name')
                ->when($request->user_id, function ($query) use ($request) {
                    $query->where('user_id', $request->user_id);
                })
                ->latest()
                ->paginate(10);
        });

        return view('home', [
            'posts' => $posts
        ]);
    }
}
