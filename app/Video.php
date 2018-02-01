<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [//Copied from user model and edited
        'src', 'description',
    ];

	public function event(){
        return $this->hasOne('App\Event');
    }
    public function photo(){
        return $this->hasMany('App\Photo');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}