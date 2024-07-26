<?php

namespace App\Notifications;

use App\Models\Ingredientes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class IngredientesOutOfStock extends Notification
{
    use Queueable;

    protected $ingredientes;

    public function __construct(Ingredientes $ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }

    public function via($notifiable)
    {
        return ['mail']; // Puedes agregar más canales aquí, como 'database', 'slack', etc.
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('¡Ingrediente Agotado!')
            ->line('El ingrediente ' . $this->ingrediente->nombre . ' se ha agotado.')
            ->action('Ver Detalles del Ingrediente', url('/ingredientes/' . $this->ingrediente->id));
    }
}
