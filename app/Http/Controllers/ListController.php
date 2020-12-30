<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservation;

use Mail;

class ListController extends Controller
{
    public function index(){

        $items=Reservation::all();
        view()->share('items',$items);
        return view('list');
    }
    public function confirmation($email,$name,$phone,$seats,$address){

       $user_email=$email;
       $user_name=$name;
       $user_phone=$phone;
       $user_seats=$seats;
       $user_address=$address;

       $data = array('name'=>"E-Parking");
        $receiver=$user_email;
        $subject="Booking Confirmation";
        $text="Your booking has been confirmed";
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


       ///echo $user_email;




    }
}
