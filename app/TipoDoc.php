<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDoc extends Model
{
    protected $table = 'tipo_docs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'      

    ];
}
