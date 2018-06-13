<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function shedule()
{
    return $this
        ->belongsToMany('App\Shedule')
        ->withTimestamps();
}

}
