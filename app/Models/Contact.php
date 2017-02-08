<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Contact
 * @package App\Models
 * @version February 8, 2017, 6:47 pm UTC
 */
class Contact extends Model
{
    public function person()
    {
        return $this->morphOne('App\Models\Person','personable');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function vendors()
    {
        return $this->belongsToMany(\App\Models\Vendor::class, 'rel_vandor_contact');
    }
}
