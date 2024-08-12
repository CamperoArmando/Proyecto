<?php

namespace App\Events;
use App\Models\Ingredientes;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class IngredienteAgotado
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $ingrediente;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Ingredientes $ingrediente)
    {
        $this->ingrediente = $ingrediente;
    }
}
