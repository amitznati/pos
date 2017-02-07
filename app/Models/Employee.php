<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version February 7, 2017, 8:53 pm UTC
 */
class Employee extends Model
{

    public function person()
    {
        return $this->morphOne('App\Models\Person','personable');
    }

    public $table = 'employees';
    
    public $timestamps = false;


    public $fillable = [
        'role_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'role_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
