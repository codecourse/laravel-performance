<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        cache()->tags(['posts'])->flush();
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        cache()->tags(['posts'])->flush();
    }
}
