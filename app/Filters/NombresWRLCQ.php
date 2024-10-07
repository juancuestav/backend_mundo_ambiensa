<?php

namespace App\Filters;

use eloquentFilter\QueryFilter\Queries\BaseClause;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class WhereRelationLikeConditionQuery.
 */
class NombresWRLCQ extends BaseClause
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

        // Aplicar la función LOWER al campo 'nombres'
        return $query->whereRaw('LOWER(nombres) ' . $operador . ' ?', ['%' . $valor . '%']);
    }
}
