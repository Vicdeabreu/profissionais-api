<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;
use App\Technology;

class ProfissionalController extends Controller
{
    public function listarProfissionais(Request $request){
        $listaProfissionais = Profissional::find(6);

        return response()->json($listaProfissionais->technologies);
    }

    public function criarProfissional(Request $request){
        $technologyId = $request->technology;
        $newProfissional = new Profissional();
        $newProfissional->name = $request->name;
        $newProfissional->github = $request->github;
        $result = $newProfissional->save();
        $technology = Technology::find($technologyId);

        if($technology){
            $technology->profissionais()->attach($newProfissional->id);
        }else{
            return response()->json(["error"=>"O id da tecnologia não existe"]);
        }

        return response()->json($newProfissional);
    }
}
