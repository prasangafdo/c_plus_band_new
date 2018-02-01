<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [//Copied from user model and edited
        'date', 'time', 'venue', 'description',
    ];

	public function photo(){
        return $this->hasMany('App\Photo');
    }
    public function video(){
        return $this->hasMany('App\Video');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}