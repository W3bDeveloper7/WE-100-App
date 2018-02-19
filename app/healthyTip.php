<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class healthyTip extends Model
{
    //
    protected $fillable = [ 'title', 'body', ];

    public function notifications(){

        return $this->morphMany('App\notification', 'notifiable');

    }
}
