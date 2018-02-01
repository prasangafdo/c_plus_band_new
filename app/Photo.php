<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = [//Copied from user model and edited
        'src', 'description',
    ];

	public function event(){
        return $this->hasOne('App\Event');
    }
    public function video(){
        return $this->hasMany('App\Video');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}