<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorIndexController extends Controller
{
    public function __invoke()
    {
        $authors = User::query()
            ->select('id', 'name')
            ->withCount('posts')
            ->get();

        return view('authors.index', [
            'authors' => $authors,
        ]);
    }
}
