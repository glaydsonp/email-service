<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ZeniteContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Object on format
     * @var $dados_email->name string
     * @var $dados_email->phone_number string
     *
     */
    public $dados_email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados_email)
    {
        $this->dados_email = $dados_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $receiver_email = "contact@glaydsonp.com";
        $sender_email = "zenite-teste@glaydsonp.com";
        return $this->from($sender_email)->to($receiver_email)->subject('Novo cadastro no site')->view('emails.zenite');
    }
}
