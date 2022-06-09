<?php

namespace Comments\Models;

use Comments\Contracts\CommentContract;
use Comments\Traits\HasPublicId;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model implements CommentContract
{
    use SoftDeletes;
    use HasPublicId;

    protected $fillable = [
        'is_automatic',
    ];

    protected $casts = [
        'is_automatic' => 'bool',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('onlyApproved', function (Builder $builder) {
            $builder->where('is_approved', true);
        });
    }

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function author(): MorphTo
    {
        return $this->morphTo();
    }

    public function scopeWithUnapproved(Builder $query): Builder
    {
        return $query->withoutGlobalScope('onlyApproved');
    }

    public function scopeOnlyUnapproved(Builder $query): Builder
    {
        return $query->withUnapproved('onlyApproved')->where('is_approved', false);
    }
}
