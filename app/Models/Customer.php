<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Customer
 * @package App\Models
 * @version February 8, 2017, 6:49 pm UTC
 */
class Customer extends Model
{

    public function person()
    {
        return $this->morphOne('App\Models\Person','personable');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }
}
