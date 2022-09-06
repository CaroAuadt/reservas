<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Socio
 *
 * @property $id
 * @property $dni
 * @property $nombre
 * @property $apellido
 * @property $celular
 * @property $email
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Reserva[] $reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Socio extends Model
{
    use SoftDeletes;

    static $rules = [
		'dni' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'celular' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dni','nombre','apellido','celular','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'socio_id', 'id');
    }
    

}
