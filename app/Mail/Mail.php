<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;
    private $paths = array();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($paths)
    {
        $this->paths = $paths;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to('jhonatamns@outlook.com');
        $this->subject('asd');
        $email = $this->markdown('WelcomeMail');

        foreach ($this->paths as $files) {
            $email->attachFromStorage("$files");
        }
    }
}
