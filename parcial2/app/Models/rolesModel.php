<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rolesModel extends Model
{
    protected $fillable = [
        'nombreRol',
    ];

    public function usuarios()
    {
        return $this->hasMany(usuariosModel::class);
    }
}
