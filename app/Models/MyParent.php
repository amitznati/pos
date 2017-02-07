<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class MyParent
 * @package App\Models
 * @version February 6, 2017, 7:13 pm UTC
 */
class MyParent extends Model
{

    public function parentable(){
        return $this->morphTo('parentable');
    }

    public $table = 'parents';
    


    public $fillable = [
        'parent_col'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parent_col' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
