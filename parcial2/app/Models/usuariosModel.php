<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuariosModel extends Model
{
    protected $fillable = [
        'nombreUsuario',
        'email',
        'contraseña',
        'rolid',
    ];

    public function rol()
    {
        return $this->belongsTo(rolesModel::class);
    }

    public function ordenes()
    {
        return $this->hasMany(ordenesModel::class);
    }
}
