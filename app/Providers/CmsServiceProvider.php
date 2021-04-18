<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        return redirect('cms.' . env('APP_DOMAIN'));
    }
}
