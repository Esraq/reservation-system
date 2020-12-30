<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservation;

use Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation=new Reservation;

        $reservation->name=$request->get('name');
        $reservation->email=$request->get('email');

        $reservation->phone=$request->get('phone');

        $reservation->seats=$request->get('seats');

        $reservation->address=$request->get('address');

        $reservation->save();



        $data = array('name'=>"E-Ticket");
        $receiver=$request->get('email');
        $subject="Ticket Update";
        $text="Thanks for your registration you will receive a mail soon";
        mail::send(['emails'=>'reset_set'],$data,
        function($message)use($receiver,$subject,$text)
        {
            $message->from('oktech1212@gmail.com','E-Ticket');
            $message->to($receiver);
            ///$message->cc('humayunesraq26552@gmail.com');
            $message->subject($subject);
            $message->setBody($text);
        });

        return redirect('/')->with('success', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
