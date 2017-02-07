<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function display_infos()
    {
        return $this->morphToMany('App\Models\DisplayInfo','displayable');
    }
}
