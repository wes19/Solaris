<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactos extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Consulta Formulario de Contacto';

    public $messageContact;

    /**
     * Create a new message instance.
     *
     * @param string $messageContact
     * @return void
     */
    public function __construct(array $messageContact)
    {
        $this->messageContact = $messageContact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): self
    {
        return $this->view('layouts.contacto');
    }
}