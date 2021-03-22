<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Transformes\MateriaTransformer;
use App\Models\materia\Materia;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $materias = Materia::all()
        ;
        return view('welcome', ['materias' => $materias]);
    }
};
