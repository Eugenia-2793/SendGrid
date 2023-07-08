<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CorreoPersonalizadoEnviado
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $mensaje;
    /**
     * Create a new event instance.
     * @param array $destinatarios
     * @param string $mensaje
     */
    public function __construct($mensaje)
    {
       // $this->destinatarios = ['eugegarciaruiz2@gmail.com', 'eugeniagarcia403@gmail.com', 'malenavoy@gmail.com'];
       $this->mensaje = $mensaje;
       
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
