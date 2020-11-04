<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** AYARLARIN  HER SAYFAYA İLETİLMESİ İÇİN BUNU KULLANDIM */
        view()->share("setting",Setting::first());
    }
}
