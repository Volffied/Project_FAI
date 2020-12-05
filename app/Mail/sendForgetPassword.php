<?php

namespace App\Mail;

use App\Model\CustomerModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendForgetPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email;
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $iduser = CustomerModel::where("email", $this->email)->first();
        return $this->subject('Game Box')
            ->view('Common_Folder.emailForget', ["id" => $iduser->id]);
        session()->forget("iduser");
    }
}
