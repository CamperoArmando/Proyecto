<?php

namespace App\Observers;

use App\Models\Ingredientes;
use App\Notifications\IngredientesOutOfStock;

class IngredientesObserver
{
    public function updated(Ingredientes $ingredientes)
    {
        if ($ingredientes->cantidad === 0 && !$ingredientes->notificado_agotado) {
            $ingredientes->notificado_agotado = true;
            $ingredientes->save();

            // Enviar la notificación
            $ingredientes->notify(new IngredientesOutOfStock($ingredientes));
        }
    }
}
