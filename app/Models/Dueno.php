<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mascota;

class Dueno extends Model
{
    protected $fillable = ['nombre', 'email', 'telefono', 'direccion'];

    public function mascotas()
    {
        // Un dueño tiene muchas mascotas (1:N)
        return $this->hasMany(Mascota::class);
    }
}
