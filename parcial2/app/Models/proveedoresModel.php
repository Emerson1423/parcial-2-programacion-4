<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedoresModel extends Model
{
    protected $fillable = [
        'nombreProveedor',
        'telefono',
        'email',
        'direccion',
        'ciudad',
        'pais',
        'codigoPostal',
    ];

    public function juegos()
    {
        return $this->hasMany(juegosModel::class, 'proveedorid');
    }


   
}
