<?php

namespace App\Filters;

use eloquentFilter\QueryFilter\Queries\BaseClause;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class WhereRelationLikeConditionQuery.
 */
class DireccionWRLCQ extends BaseClause
{
    /**
     * @param $query
     *
     * @return Builder
     */
    public function apply($query): Builder
    {
        $valor = strtolower($this->values['like']);
        $operador = 'like';

        return $query->whereRaw('LOWER(direccion) ' . $operador . ' ?', ['%' . $valor . '%']);
    }
}
