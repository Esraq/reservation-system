<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class ApproveController extends Controller
{
    public function index(){


        $data = array('name'=>"Thania");
        $receiver="rezanurraihan10@gmail.com";
        $subject="User Credentials";
        $text="Android+Laravel";
        mail::send(['emails'=>'reset_set'],$data,
        function($message)use($receiver,$subject,$text)
        {
            $message->from('oktech1212@gmail.com','Topu');
            $message->to($receiver);
            ///$message->cc('humayunesraq26552@gmail.com');
            $message->subject($subject);
            $message->setBody($text);
        });

        echo "done";





    }
}
