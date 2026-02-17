<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Dueno;
use App\Models\Veterinario;

class Mascota extends Model
{
    protected $fillable = [
        'nombre',
        'especie',
        'raza',
        'edad',
        'dueno_id',
        'veterinario_id',
        'adoptado',
        'notas',
    ];

    public function dueno()
    {
        // Una mascota pertenece a un dueño (N:1)
        return $this->belongsTo(Dueno::class);
    }

    public function veterinario()
    {
        // Una mascota pertenece a un veterinario (N:1)
        return $this->belongsTo(Veterinario::class);
    }
}
