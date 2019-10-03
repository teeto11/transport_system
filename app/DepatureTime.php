<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepatureTime extends Model
{
    //public $table = "depature_times";
    
    public function trip(){
        return $this->belongsTo('App\Trip');
    }
}
