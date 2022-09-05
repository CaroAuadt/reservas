<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class socio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='socios';
    protected $fillables=['dni','nombre','apellido','celular','email', 'fecha_alta'];

    protected $date= ['fecha_alta'];
}
