<?php

namespace Comments\Traits;

trait HasComments
{
    public function comments()
    {
        return $this->morphMany(config('comments.model'), 'commentable');
    }
}
