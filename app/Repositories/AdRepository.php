<?php

namespace App\Repositories;

use App\Ad;
use InfyOm\Generator\Common\BaseRepository;


class AdRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ad::class;
    }
}