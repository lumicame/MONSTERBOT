<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	public function classroom()
{
    return $this
        ->belongsToMany('App\Classroom')
        ->withTimestamps();
}


	public function shedule()
{
    return $this
        ->belongsToMany('App\Shedule')
        ->withTimestamps();
}

    //
}
