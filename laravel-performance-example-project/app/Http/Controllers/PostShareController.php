<?php

namespace App\Http\Controllers;

use App\Mail\SharePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostShareController extends Controller
{
    public function __invoke(Request $request, Post $post)
    {
        $this->validate($request, [
            'email' => ['required', 'email']
        ]);

        // Send the email

        return back();

        // Use this instead of back() to demo the speed using Chrome developer tools
        return response(null, 200);
    }
}
