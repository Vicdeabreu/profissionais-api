<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionais";
    // Solo para aclarar el nombre de la tabla y no tener conflicto
    public function technologies(){
        return $this->belongsToMany(
            'App\Technology', 
            'profissionais_technology', 
            'profissionais_id', 
            'technologies_id');
    // De esta forma no hace falta incluir el modelo arriba
    }
}
