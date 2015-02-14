<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('flash', function() {
           return $this->app->make('App\Itheatre\Notifications\FlashNotifier');
        });
    }
}