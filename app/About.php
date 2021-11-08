<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    //guarded
    protected $guarded=[];
    public static $rules = [
        'title'             => ['required', 'string', 'max:255'],
        'description'       => ['required', 'string'],

    ];
}
