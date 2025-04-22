<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class juegosModel extends Model
{
    protected $fillable =[
        'tituloJuego',
        'descripcion',
        'precio',
        'imagen',
        'proveedorid',
        'plataformaid',
        'generoid',
    ];

    public function plataformas()
    {
        return $this->belongsTo(plataformasModel::class, 'plataformaid');
    }

    public function categoria(){
        return $this->belongsTo(categoriasModel::class, 'generoid');
    }

    public function proveedores()
    {
        return $this->belongsTo(proveedoresModel::class, 'proveedorid');
    }

    public function pedidos()
    {
        return $this->hasMany(pedidosModel::class, 'juegoid'); 

    }
}
