<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'number_of_seat', 'depature_time_id'];    

    public function depature(){
        return $this->belongsTo('App\DepatureTime', 'depature_time_id');
    }
}
