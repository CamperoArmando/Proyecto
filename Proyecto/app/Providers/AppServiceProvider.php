<?php

namespace App\Providers;
use App\Models\Ingredientes;
use Illuminate\Support\ServiceProvider;
use App\Observers\IngredientesObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Ingredientes::observe(IngredientesObserver::class);
    }
}
