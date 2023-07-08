<?php

namespace App\Listeners;

use App\Events\CorreoPersonalizadoEnviado;
use App\Mail\CorreoSendGrid;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EnviarCorreoPersonalizadon
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CorreoPersonalizadoEnviado  $event
     * @return void
     */
    public function handle(CorreoPersonalizadoEnviado $event)
    {
       // $destinatarios = ['eugegarciaruiz2@gmail.com', 'jonathan.rios-ls@alitaware.com', 'lucas.jarpa-ls@alitaware.com' ];
       $destinatarios = 'eugegarciaruiz2@gmail.com';  
       Mail::to($destinatarios)->queue(
               new CorreoSendGrid($event->mensaje)
           );
    }
}
