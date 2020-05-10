<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Contact;
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $mycontact;

    public function __construct(Contact $con)
    {
        $this->mycontact = $con;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->from('tester@gmail.com','Portfolio')
                    ->subject('Nouveau Contact')
                    ->view('mails.nouveauContact');
    }
}
