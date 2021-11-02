<?php

namespace App\Repositories;

use App\Offer;
use InfyOm\Generator\Common\BaseRepository;


class OfferRepostiryRepository extends BaseRepository
{
  
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Offer::class;
    }
}
