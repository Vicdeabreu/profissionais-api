<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profissional;

class Technology extends Model
{
    protected $table = "technologies";
    // Para aclarar que el model tiene una relación con esa tabla
    // public $timestamps = false; (Esto en caso de que quiera declarar que mi tabla no tiene timestamps)

    public function profissionais(){
        return $this->belongsToMany('App\Profissional', 'profissionais_technology', "technologies_id", "profissionais_id");
        //Otra opción es por el método del proyecto:(Profissional::class)
    }
}
