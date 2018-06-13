<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{

	protected $table='classrooms';

	protected $fillable=['name','description'];
	
    public function users()
{
    return $this
        ->belongsToMany('App\User')
        ->withTimestamps();
}

    public function shedules()
{
    return $this
        ->belongsToMany('App\Shedule')
        ->withTimestamps();
}

}
