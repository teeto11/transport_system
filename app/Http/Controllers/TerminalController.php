<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terminal;
use App\State;
use App\Trip;

class TerminalController extends Controller
{
    public function create_view(){
        $states = State::all();

        return view('terminal.create', compact('states'));
    }

    public function create(Request $request){
        $terminal = Terminal::create($request->all());

        return back()->with('status', 'Terminal Created');
    }

    public function all(){
        $terminals = Terminal::all();

        return view('terminal.all', compact('terminals'));
    }

    public function getTerminal($id){
        $terminals = Trip::where('from', $id)->with(['toModel'])->get();

        return $terminals;
    }
}
