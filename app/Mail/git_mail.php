<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class git_mail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->data['address']);
        $address = $this->data['address'];
        // $subject = $this->data['subject'];
        $name = 'Laravel_base';
        // dd($name);

        return $this->view('email.sendmail')
            ->from('m.zamin@ldh.01s.in', $name)
            // ->cc($address, $name)
            // ->bcc($address, $name)
            // ->replyTo($address, $name)
            // ->subject($subject)
            ->with(['test_message' => $this->data['message']]);
    }
}
