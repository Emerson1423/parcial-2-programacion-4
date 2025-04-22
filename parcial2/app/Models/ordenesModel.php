<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ordenesModel extends Model
{
    protected $fillable = [
        'usuarioid',
        'total',
        'fecha_orden',

    ];

    public function usuario()
    {
        return $this->belongsTo(usuariosModel::class, 'usuarioid');
}

    public function pedidos(){
        return $this->hasMany(pedidosModel::class, 'ordenid');
    }
}
