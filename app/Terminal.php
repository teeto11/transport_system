<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $fillable = [
        'state_name', 'area'
    ];

    public function state(){
        return $this->hasOne('App\State');
    }
}
