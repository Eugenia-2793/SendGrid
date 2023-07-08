<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoSendGrid;

class EnviarCorreoTest extends TestCase
{
    public function testEnviarCorreo()
    {
         Mail::fake();

        $correo = new CorreoSendGrid();
        Mail::to('eugenia.garcia@est.fi.uncoma.edu.ar')->send($correo);

        Mail::assertSent(CorreoSendGrid::class, function ($mail) {
            return $mail->hasTo('eugenia.garcia@est.fi.uncoma.edu.ar');
        });
    }
}
