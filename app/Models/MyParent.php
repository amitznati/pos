<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Parent
 * @package App\Models
 * @version February 5, 2017, 2:43 pm UTC
 */
class MyParent extends Model
{
    use SoftDeletes;

    public $table = 'parent';
    

    // protected $dates = ['deleted_at'];


    public $fillable = [
        'parentcol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parentcol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
