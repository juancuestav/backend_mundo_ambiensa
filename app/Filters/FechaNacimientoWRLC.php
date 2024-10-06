<?php

namespace App\Filters;


class FechaNacimientoWRLC
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
        if (!empty($params['like']) && $field == 'fecha_nacimiento') {
            $method = FechaNacimientoWRLCQ::class;
        }

        return $method ?? null;
    }
}
