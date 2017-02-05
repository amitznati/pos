<?php

namespace App\Repositories;

use App\Models\Child;
use InfyOm\Generator\Common\BaseRepository;

class ChildRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'childcol'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Child::class;
    }
}
