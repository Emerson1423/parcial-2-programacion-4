<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class plataformasModel extends Model
{
    protected $fillable = [
        'nombrePlataforma',
    ];

    public function juegos()
    {
        return $this->hasMany(juegosModel::class);
    }
}
