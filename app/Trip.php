<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['from', 'to', 'estimated_time', 'number_of_seats', 'amount', 'details'];

    public function fromModel(){
        return $this->belongsTo('App\Terminal', 'from');
    }

    public function toModel(){
        return $this->belongsTo('App\Terminal', 'to');
    }

    public function time(){
        return $this->hasMany('App\DepatureTime');
    }
}
