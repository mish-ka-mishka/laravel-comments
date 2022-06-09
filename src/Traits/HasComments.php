<?php

namespace Comments\Traits;

use Comments\Contracts\CommentAuthorContract;
use Comments\Contracts\CommentContract;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Collection;

/**
 * @property CommentContract[]|Collection $comments
 */
trait HasComments
{
    public function comments(): MorphMany
    {
        return $this->morphMany(config('comments.model'), 'commentable');
    }

    public function isCommentableBy(CommentAuthorContract $author): bool
    {
        return true;
    }

    public function commentHasToBeApproved(CommentAuthorContract $author)
    {
        return config('comments.comments_have_to_be_approved');
    }

    public function addComment(string $text, ?CommentAuthorContract $author, array $attributes = []): CommentContract
    {
        if (! $this->isCommentableBy($author)) {
            throw new \Exception('Object is not commentable by this author');
        }

        /** @var CommentContract $comment */
        $comment = $this->comments()->make($attributes);

        $comment->author()->associate($author);
        $comment->commentable()->associate($this);
        $comment->text = $text;
        $comment->is_approved = ! $this->commentHasToBeApproved($author);

        $comment->save();

        return $comment;
    }
}
