<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
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
        //return $this->subject('Nouveau message')->markdown('pages.mail');
        //return $this->from('example@example.com', 'Example')->view('pages.mail');
        /*return $this->view('pages.mail')
        ->with([
            'datafirst_name' => $this->data->first_name,
            'datalast_name' => $this->data->last_name,
        ]);*/
        return $this->from('example@example.com')
        ->markdown('pages.mail');
    }
}
