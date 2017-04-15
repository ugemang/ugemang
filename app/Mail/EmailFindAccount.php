<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use \Crypt;
use Hash;

class EmailFindAccount extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->user->user_pass = Hash::make('123456');
        $this->user->save();

        return $this->view('email.findaccount')->with([
          'user_login' => $this->user->user_login,
          'user_pass' => '123456'
        ]);
    }
}
