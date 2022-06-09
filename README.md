# Laravel Comments

This package provides a simple way to add comments to your Laravel application.

## Installation

Run the following command from your project directory to add the dependency:

```shell
composer require mkaverin/laravel-comments
```

Then, copy and run database migrations:

```shell
php artisan vendor:publish --provider="Comments\Providers\CommentsServiceProvider" --tag=migrations
```

```shell
php artisan migrate
```

### Laravel without auto-discovery

If you don't use auto-discovery, add the ServiceProvider to the providers array in `config/app.php`:

```php
'providers' => [
    ...
    Comments\Providers\CommentsServiceProvider::class,
],
```

## Configuration

You can copy the package config with the publish command:

```shell
php artisan vendor:publish --provider="Comments\Providers\CommentsServiceProvider"
```

You can find published config in `config/comments.php`.

## Usage

### Preparing your model

The model you want to attach comments to must use the `Comments\Traits\HasComments` trait.

## Testing

```shell
composer test
```
