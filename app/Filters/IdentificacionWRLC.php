<?php

namespace App\Filters;


class IdentificacionWRLC
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
        if (!empty($params['like']) && $field == 'identificacion') {
            $method = IdentificacionWRLCQ::class;
        }

        return $method ?? null;
    }
}
