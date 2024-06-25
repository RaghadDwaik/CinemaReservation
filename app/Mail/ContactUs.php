<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data Data from the contact form.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * This method returns $this, and sets the view or Markdown view to be used, as well as other parameters like subject.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('aawad9797@gmail.com', 'Ahmet Awad')
                    ->subject('Contact Us Message')
                    ->markdown('emails.contact', [
                        'data' => $this->data
                    ]);
    }
}
