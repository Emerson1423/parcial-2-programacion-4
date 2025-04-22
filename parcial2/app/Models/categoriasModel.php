<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoriasModel extends Model
{
    protected $fillable = [
        'nombreCategoria',
    ];

    public function juegos(){
        return $this->hasMany(juegosModel::class);

    }
}
