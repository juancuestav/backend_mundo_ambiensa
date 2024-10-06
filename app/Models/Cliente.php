<?php

namespace App\Models;

use App\Filters\ApellidosWRLC;
use App\Filters\IdentificacionWRLC;
use App\Filters\NombresWRLC;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory, Filterable;
    /**
     * La tabla asociada al modelo.
     *
     * @var string
     */
    protected $table = 'clientes';

    /**
     * Los atributos que se pueden asignar en masa.
     *
     * @var array
     */
    protected $fillable = [
        'identificacion',
        'nombres',
        'apellidos',
        'email',
        'telefono',
        'direccion',
        'ciudad',
        'fecha_nacimiento',
        'activo',
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     *
     * @var array
     */
    protected $casts = [
        'fecha_nacimiento' => 'date',
        'activo' => 'boolean',
    ];

    /*******************
     * Eloquent Filter
     *******************/
    private static $whiteListFilter = ['*'];

    public function EloquentFilterCustomDetection(): array
    {
        return [
            IdentificacionWRLC::class,
            NombresWRLC::class,
            ApellidosWRLC::class,
            EmailWRLC::class,
            TelefonoWRLC::class,
            DireccionWRLC::class,
            FechaNacimientoWRLC::class,
        ];
    }
}
