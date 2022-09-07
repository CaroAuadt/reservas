<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reserva
 *
 * @property $id
 * @property $fila
 * @property $columna
 * @property $fecha_reserva
 * @property $socio_id
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Socio $socio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    use SoftDeletes;

    static $rules = [
		'fila' => 'numeric|required|between:1,5',
		'columna' => 'numeric|required|between:1,10',
		'fecha_reserva' => 'required|date',
		'socio_id' => 'numeric|required',
    ];

    protected $perPage = 20;

    protected $dates=['fecha_reserva'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fila','columna','fecha_reserva','socio_id'];

  CONST FILAS = [1,2,3,4,5];
  CONST COLUMNAS=[1,2,3,4,5,6,7,8,9,10];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function socio()
    {
        return $this->belongsTo(Socio::class, 'socio_id', 'id')->withTrashed();

    }



}
