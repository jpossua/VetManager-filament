<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mascota;

class Veterinario extends Model
{
    protected $fillable = ['nombre', 'especialidad', 'contacto'];

    public function mascotas()
    {
        // Un veterinario atiende muchas mascotas (1:N)
        return $this->hasMany(Mascota::class);
    }
}
