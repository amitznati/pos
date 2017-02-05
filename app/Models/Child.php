<?php

namespace App\Models;

use App\Models\MyParent;

/**
 * Class Child
 * @package App\Models
 * @version February 5, 2017, 2:42 pm UTC
 */
class Child extends MyParent
{

    public $table = 'child';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'childcol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'childcol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
