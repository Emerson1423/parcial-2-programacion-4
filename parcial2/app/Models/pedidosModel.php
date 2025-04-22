<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedidosModel extends Model
{
    protected $fillable = [
        'ordenid',
        'juegoid',
        'cantidad',
        'precio',
        'total',
    ];

    public function ordenes()
    {
        return $this->belongsTo(ordenesModel::class);
    }
}
