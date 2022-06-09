<?php

namespace Comments\Traits;

use App\Models\Comment;

trait HasComments
{
    public function comments()
    {
        return $this->morphMany(config('comments.model'), 'commentable');
    }
}
