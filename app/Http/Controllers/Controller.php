<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Transformes\MateriaTransformer;
use App\Models\anuncio\Anuncio;
use App\Models\materia\Materia;
use App\Models\professor\Professor;
use App\Models\professor\Rank;
use Exception;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $user = Auth::user();
        $materias = Materia::paginate(5);
        $professores = Professor::all();
        $anuncios = Anuncio::all();
        $active = "active";
        $count = 0;
        foreach($professores as $professor){
            $score[$count] = Rank::where('professor_id', $professor->id)->first();
            $professor['score'] = $score[$count];
            $count++;
        }
            return view('welcome', ['materias' => $materias, 'professores' => $professores, 'anuncios' =>  $anuncios, 'score' => $score, 'active' => $active ]);
      
    }
};
