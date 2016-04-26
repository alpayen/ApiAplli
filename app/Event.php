<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{


    public function user() {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'user_id', 'event', 'description',
    ];}
