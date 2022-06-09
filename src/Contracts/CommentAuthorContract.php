<?php

namespace Comments\Contracts;

interface CommentAuthorContract
{
    public function getCommentAuthorName(): string;

    // public function getCommentAuthorProfileUrl(): ?string; // TODO

    public function getCommentAuthorAvatarUrl(): ?string;
}
