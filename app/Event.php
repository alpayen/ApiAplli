<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{


    public function user() {
        return $this->belongsTo('App\User');
    }

    public function sport(){
        return $this->hasOne('App/Sport');
    }

    protected $fillable = [
        'user_id', 'event', 'description',
    ];}
