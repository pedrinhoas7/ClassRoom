<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Transformes\MateriaTransformer;
use App\Models\anuncio\Anuncio;
use App\Models\materia\Materia;
use App\Models\professor\Professor;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $materias = Materia::all();
        $professores = Professor::all();
        $anuncios = Anuncio::all();
        try {
            return view('welcome', ['materias' => $materias, 'professores' => $professores, 'anuncios' =>  $anuncios ]);
        }catch(Exception $e){
            return $e;
        }
    }
};
