<?php


namespace Jorgb\CookieConsent;

use Illuminate\Support\ServiceProvider;
use Jorgb\CookieConsent\Http\Livewire\CookieConsent;
use Livewire\Livewire;

class CookieConsentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/cookie-consent.php' => config_path('cookie-consent.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/cookie-consent'),
        ], 'views');

        $this->mergeConfigFrom(__DIR__.'/../config/cookie-consent.php', 'cookie-consent');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'cookie-consent');

        Livewire::component('cookie-consent', CookieConsent::class);
    }

    public function register()
    {
        //
    }


}
