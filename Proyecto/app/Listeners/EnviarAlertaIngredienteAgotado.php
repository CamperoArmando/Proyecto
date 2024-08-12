<?php

namespace App\Listeners;

use App\Events\IngredienteAgotado;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class EnviarAlertaIngredienteAgotado
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\IngredienteAgotado  $event
     * @return void
     */
    public function handle(IngredienteAgotado $event)
    {
        // Aquí puedes enviar una alerta. Por simplicidad, estamos usando el log.
        Log::alert('El ingrediente "' . $event->ingrediente->nombre . '" se ha agotado.');
    }
}