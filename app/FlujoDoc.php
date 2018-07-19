<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlujoDoc extends Model
{
    protected $table = 'flujo_docs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tipo_doc_id',
        'n_reg',
        'desc_doc',
        'fecha',
        'asunto',
        'emisor',
        'archivo',
        'responsable_id',
        'se_adjunta',
        'doc_ref',
        'area_destino',
        'estado'

    ];
}

