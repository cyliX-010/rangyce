<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class police_station extends Model
{
    //

    protected $fillable = ['name_of_station','description', 'city', 'street', 'zip'];

    public function userPolice()
    {
    	return $this->hasMany('App\User');
    }
}
