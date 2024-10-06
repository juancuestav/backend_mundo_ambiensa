<?php

namespace App\Filters;


class NombresWRLC
{
    /**
     * @param $field
     * @param $params
     * @param $is_override_method
     *
     * @return string|null
     */
    public static function detect($field, $params, $is_override_method = false): ?string
    {
        if (!empty($params['like']) && $field == 'nombres') {
            $method = NombresWRLCQ::class;
        }

        return $method ?? null;
    }
}
