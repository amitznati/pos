<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaplayInfo extends Model
{
    public function products()
    {
    	return $this->morphedByMany('App\Models\Product','displayable');
    }

    public function menus()
    {
    	return $this->morphedByMany('App\Models\Menu','displayable');
    }
}
