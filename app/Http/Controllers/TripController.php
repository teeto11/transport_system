<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTripRequest;
use App\Trip;
use App\Terminal;
use App\DepatureTime;

class TripController extends Controller
{
    public function create_form(){
        $terminals = Terminal::all();

        return view('trip.create', compact('terminals'));
    }

    public function create(CreateTripRequest $request){
        if($request['from'] == $request['to']){
            return back()->with('status', 'From and To destinations cannot be the same');
        }
        $trip = Trip::create($request->all());

        //$trip->available_seats = $request['number_of_seats'];
        $trip->save();

        for($i=0; $i<count($request['time']); $i++){
            $depature = new DepatureTime;
            $depature->trip_id = $trip->id;
            $depature->time = $request['time'][$i];
            $depature->save();
        } 

        return back()->with('status', 'Trip Created Successfully');
    }

    public function view_trips(){
        $trips = Trip::all();

        return view('trip.all', compact('trips'));
    }

    public function trip_detail($id){
        $trip = Trip::find($id);

        return view('trip.detail', compact('trip'));
    }

    public function delete($id){
        $trip = Trip::find($id);
        $trip->delete();

        return back()->with('status', 'Trip deleted');
    }

    public function getTime($from, $to){
        $trip = Trip::where('from', $from)
                      ->where('to', $to)
                      ->first();
        return $trip->time;
    }
}
