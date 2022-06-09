<?php

namespace Comments\Models;

use Comments\Traits\HasPublicId;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperComment
 */
class Comment extends Model
{
    use SoftDeletes, HasPublicId;

    protected $fillable = [
        'is_automatic',
    ];

    protected $casts = [
        'is_automatic' => 'bool',
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function author()
    {
        return $this->morphTo();
    }
}
