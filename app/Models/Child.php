<?php

namespace App\Models;
use Eloquent as Model;
use App\Models\MyParent;

/**
 * Class Child
 * @package App\Models
 * @version February 6, 2017, 7:13 pm UTC
 */
class Child extends Model
{

    public function parent(){
        return $this->morphOne('App\Models\MyParent', 'parentable');
    }
    public $table = 'children';
    public $timestamps = false;
    public $fillable = [
        'child_col'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'child_col' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
