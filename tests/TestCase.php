<?php

namespace Comments\Tests;

use Comments\Providers\CommentsServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use DatabaseMigrations;

    protected function getPackageProviders($app): array
    {
        return [
            CommentsServiceProvider::class,
        ];
    }
}
