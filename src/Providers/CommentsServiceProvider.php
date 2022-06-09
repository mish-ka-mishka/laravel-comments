<?php

namespace Comments\Providers;

use Illuminate\Support\ServiceProvider;

class CommentsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/comments.php', 'comments');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/comments.php' => config_path('comments.php'),
        ], 'config');

        if (!class_exists('CreateCommentsTable')) {
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__ . '/../../database/migrations/create_comments_table.php.stub' => database_path('migrations/' . $timestamp . '_create_comments_table.php'),
            ], 'migrations');
        }
    }
}
