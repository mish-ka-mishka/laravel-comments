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

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}
