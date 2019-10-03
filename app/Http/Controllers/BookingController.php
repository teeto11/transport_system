<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use App\Booking;
use App\DepatureTime;
use App\Trip;


class BookingController extends Controller
{
    public function book(BookingRequest $request){
        $depature = DepatureTime::find($request['depature_time_id']);
        
        $trip = Trip::find($depature->trip_id);
      
            if($request['number_of_seat'] < $trip->available_seat){
                $booking = Booking::create($request->all());
                $trip->available_seat = $trip->available_seat - $request['number_of_seat'];
                $trip->save();
                $amount = $trip->amount;

                $trip_id = $trip->id;
                $booking_id = $booking->id;
                $number_of_seat = $request['number_of_seat'];

                return view('pay', compact('amount', 'trip_id', 'number_of_seat', 'booking_id'));
            } else{
                return redirect('home')->with('message', 'Available seat is less than the number of seat you want');
            }
            
        }
        
    

    public function Book_view(Request $request){
           
        $time = DepatureTime::find($request['time']);
        $trip = Trip::find($time->trip_id);
        $trips = Trip::all();
        //dd($trip);
        //($time->trip->fromModel->area);
        return view('book', compact('time','trip', 'trips'));
    }

    public function adminbook(){

        $bookings = Booking::all();
        // send email notifications 
        
       return view('booking.bookdetails',compact('bookings'));
    }

   
}
