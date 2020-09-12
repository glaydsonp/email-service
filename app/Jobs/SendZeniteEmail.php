<?php

namespace App\Jobs;

use App\Mail\ZeniteContactForm;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendZeniteEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Object on format
     * @var $dados_email->name string
     * @var $dados_email->phone_number string
     *
     */
    public $dados_email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($dados_email)
    {
        $this->dados_email = $dados_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new ZeniteContactForm($this->dados_email);
        Mail::send($email);
    }
}
