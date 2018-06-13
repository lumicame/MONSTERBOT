<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    
    public function classroom()
{
 return $this
        ->belongsToMany('App\Classroom')
        ->withTimestamps();
}
 public function dates()
{
    return $this
        ->belongsToMany('App\Date')
        ->withTimestamps();
}

 public function subject()
{
    return $this
        ->belongsToMany('App\Subject')
        ->withTimestamps();
}
 public function user()
{
    return $this
        ->belongsToMany('App\User')
        ->withTimestamps();
}


}
