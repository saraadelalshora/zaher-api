<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;


class json extends TransformerAbstract
{
    /**
     * @param \App\Json $json
     * @return array
     */
    public static function response($data = null, $message = null)
    {
        return [
            'data'    => $data,
            'message' => $message,
        ];
    }
}