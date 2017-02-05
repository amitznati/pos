<?php

namespace App\Repositories;

use App\Models\MyProduct;
use InfyOm\Generator\Common\BaseRepository;

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'dept_id',
        'group_id',
        'vandor_id',
        'sale_price',
        'bay_price',
        'bacode',
        'brand',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MyProduct::class;
    }
}
