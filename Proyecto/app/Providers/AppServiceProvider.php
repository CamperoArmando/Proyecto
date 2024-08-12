<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Observers\IngredientesObserver;
use App\Events\IngredienteAgotado;
use App\Listeners\EnviarAlertaIngredienteAgotado;

class AppServiceProvider extends ServiceProvider
{
    protected $listen = [
        IngredienteAgotado::class => [
            EnviarAlertaIngredienteAgotado::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }
}
