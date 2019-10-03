<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
      protected $fillable = [
        'id','name'
    ];

    public function terminal_state(){
        return $this->belongsTo('App\Terminal');
    }
    
}
