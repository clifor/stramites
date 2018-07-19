<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsables';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'oficina_id',
        'f_inicio',
        'f_fin'    

    ];
}
