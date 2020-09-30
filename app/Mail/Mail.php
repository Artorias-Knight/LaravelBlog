<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;
    private $paths = array();
    private $mailsubject;
    private $content;

    public function __construct($paths, $mailsubject, $content)
    {
        $this->paths = $paths;
        $this->mailsubject = $mailsubject;
        $this->content = $content;
    }

    public function build()
    {
        $this->to('sendemail');
        $this->subject($this->mailsubject);
        $data = array([
            'content' => $this->content,
            'subject' => $this->mailsubject
        ]);
        $email = $this->markdown('email',$data);

        foreach ($this->paths as $files) {
            $email->attachFromStorage("$files");
        }
    }
}
