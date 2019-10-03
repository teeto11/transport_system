<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terminal;
use App\Trip;
use App\Booking;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::all();
        $terminals = Terminal::all();
        return view('home', compact('terminals','trips'));
    }

    public function admin_home(){
        return view('admin.home');
    }
    
      public function pay(Request $request){
        $trip = Trip::find($request['trip_id']);
        $booking = Booking::find($request['booking_id']);
        $amount = $request['amount'];
        $number_of_seat = $request['number_of_seat'];

        return view('ticket', compact('trip', 'amount', 'number_of_seat', 'booking'));
    }
}
