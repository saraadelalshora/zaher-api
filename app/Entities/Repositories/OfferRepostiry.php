<?php

namespace App\Entities\Repositories;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OfferRepostiry.
 *
 * @package namespace App\Entities\Repositories;
 */
class OfferRepostiry extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

}
