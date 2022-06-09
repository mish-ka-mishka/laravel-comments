<?php

/**
 * @see https://github.com/mish-ka-mishka/laravel-comments
 */

return [
    /*-------------------------------------------------------------------------
    | Comment model
    |--------------------------------------------------------------------------
    |
    | Here you can specify custom model class for comments.
    | Model must implement \Comments\Contracts\CommentContract
    |
    */
    'model' => \Comments\Models\Comment::class,

    /*-------------------------------------------------------------------------
    | Do comments need approval by default
    |--------------------------------------------------------------------------
    |
    | If set to false, new comments are created with “is_approved” flag set to true
    |
    */
    'comments_have_to_be_approved' => false,
];
