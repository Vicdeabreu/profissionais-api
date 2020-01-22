<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionais";
    public function technologies(){
        return $this->hasMany('App\Technology', 'profissionais_technology', "profissionais_id", "technologies_id");
    }
}
