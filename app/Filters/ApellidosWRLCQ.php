<?php

namespace App\Filters;

use eloquentFilter\QueryFilter\Queries\BaseClause;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class WhereRelationLikeConditionQuery.
 */
class ApellidosWRLCQ extends BaseClause
{
    /**
     * @param $query
     *
     * @return Builder
     */
    public function apply($query): Builder
    {
        $valor = strtolower($this->values['like']); // Convertir el valor a minúsculas
        $operador = 'like';

        // Aplicar la función LOWER al campo 'apellidos'
        return $query->whereRaw('LOWER(apellidos) ' . $operador . ' ?', ['%' . $valor . '%']);
    }
}
