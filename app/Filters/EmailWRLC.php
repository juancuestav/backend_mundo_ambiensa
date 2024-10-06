<?php

namespace App\Filters;


class EmailWRLC
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
        if (!empty($params['like']) && $field == 'email') {
            $method = EmailWRLCQ::class;
        }

        return $method ?? null;
    }
}
