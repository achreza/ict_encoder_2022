<?php

namespace App\Mail;

use App\Models\Tim;
use App\Models\VerifyTim;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $tim;
    protected $verifyTim;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Tim $tim, VerifyTim $verifyTim)
    {
        $this->tim = $tim;
        $this->verifyTim = $verifyTim;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('auth.email-verification')->subject("Verifikasi email pendaftaran ICT2019")->with(['tim' => $this->tim, 'verifyTim' => $this->verifyTim]);
    }
}
