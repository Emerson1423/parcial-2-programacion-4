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
        return $this->belongsTo(ordenesModel::class, 'ordenid');
    }

    public function juegos()
    {
        return $this->belongsTo(juegosModel::class, 'juegoid');
    }

    public function pagos(){
        return $this->belongsTo(pagosModel::class, 'pagoid');
    }

    
        
}
