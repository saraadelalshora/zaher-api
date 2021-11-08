<?php

namespace App\Repositories;

use App\About;
use InfyOm\Generator\Common\BaseRepository;


class AboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return About::class;
    }
}
