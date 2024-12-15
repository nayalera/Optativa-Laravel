<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Ntfs extends Mailable
{
    use Queueable, SerializesModels;

    public $subject_lng;
    public $msj_lng;
    public $name_lng;
    public $email_lng;
    public $filesAttach = [];

    public function __construct($subject = '', $msj = '', $filesAttach = [])
    {
        if(!empty($subject)){
            $this->subject_lng = $subject;
        }
        if(!empty($msj)){
            $this->msj_lng = $msj;
        }
        if(!empty($name)){
            $this->name_lng = $name;
        }
        if(!empty($email)){
            $this->email_lng = $email;
        }
        if(!empty($filesAttach)){
            $this->filesAttach = $filesAttach;
        }
    }

    public function build()
    {
        $email = $this->view('email.ntfs')->subject($this->subject_lng);
        if(!empty($this->filesAttach)){
            foreach($this->filesAttach as $pathFile){
                // Log::debug(Storage::exists($pathFile));
                // if(Storage::exists($pathFile))
                    $email->attach(url($pathFile));
            }
        }
        return $email;
    }
}
