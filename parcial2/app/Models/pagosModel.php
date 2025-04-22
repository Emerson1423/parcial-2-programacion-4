<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pagosModel extends Model
{
    protected $fillable = [
        'ordenid',
        'nombre',
        'apellido',
        'numTarjeta',
        'cvv',
        'fechaExp',
    ];


    public function pedidos()
    {
        return $this->hasMany(pedidosModel::class, 'pagoid');
    }
}
