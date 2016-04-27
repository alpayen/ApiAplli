<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    function event(){
        $this->belongsTo('App/Event');
    }
}
