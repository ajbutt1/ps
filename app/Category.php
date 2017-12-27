<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function share()
    {
    	return $this->hasMany('App\Share');
    }
}
