<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InfoRequest extends Mailable
{
    use Queueable, SerializesModels;

	public $params;
	
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $params)
    {
		$this->params=$params;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->with($this->params)->view('mail.InfoRequest')->text('mail.InfoRequest_plain');
		// dd($this);
    }
}
