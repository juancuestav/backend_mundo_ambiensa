<?php

namespace App\Filters;

use eloquentFilter\QueryFilter\Queries\BaseClause;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class WhereRelationLikeConditionQuery.
 */
class EmailWRLCQ extends BaseClause
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

        return $query->whereRaw('LOWER(email) ' . $operador . ' ?', ['%' . $valor . '%']);
    }
}
