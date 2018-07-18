<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $table = 'oficinas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'es_area',
        'es_subarea',
        'dependencia',
        'obs'      

    ];
}

