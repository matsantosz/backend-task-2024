<?php

namespace App\Infrastructure\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Model::unguard();
        Model::shouldBeStrict();
    }
}
