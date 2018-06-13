<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    protected $table='monsters';

	protected $fillable=['id','name','description','accion','user_id'];
	
	public function user()
{
    return $this
        ->belongsToMany('App\User')
        ->withTimestamps();
}

}
