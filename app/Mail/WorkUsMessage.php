<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Sichikawa\LaravelSendgridDriver\SendGrid;

class WorkUsMessage extends Mailable
{
    use SendGrid;
    use Queueable, SerializesModels;

    public $subject = 'Solicitud de Empleo';
    public $pathFile;
    public $messageWorkUs;

    /**
     * Create a new message instance.
     *
     * @param array $messageWorkUs
     * @param string $pathFile
     * @return void
     */
    public function __construct(array $messageWorkUs, string $pathFile)
    {
        $this->messageWorkUs = $messageWorkUs;
        $this->pathFile = $pathFile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): self
    {
        return $this->view('layouts.messageWorkUs')->attach($this->pathFile, [
            'as' => $this->messageWorkUs['nombre'] . '.pdf'
        ]);
    }
}