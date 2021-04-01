<?php

namespace App\Http\Controllers\materia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\materia\Materia;
use App\Models\professor\Professor;
use App\Models\professor\Rank;
use Exception;
use Illuminate\Support\Facades\Auth;

class MateriaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $materias = Materia::paginate(10);
            $user = Auth::user();
            $professor = Professor::where('email', $user->email)->first();
            $score = Rank::where('professor_id', $professor->id)->first();
            return view('materia.adicionarMateriasProfessor', ['materias' => $materias, 'ranks' => $score]);
        }catch(Exception $e){
            return $e;
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            
            $user = Auth::user();
            $professor = Professor::where('email', $user->email)->first();
            $materias = Materia::where('professor_id', $professor->id)->get ();
            $score = Rank::where('professor_id', $professor->id)->first();
            $materia = Materia::create([
            'name' => $request->name,
            'professor_id' => $professor->id,
            'descricao' => $request->descricao,
            'carga_horaria' => $request->carga_horaria,
            'valor' => $request->valor
        ]);
            
            return redirect()->route('materias');
        }catch(Exception $e){
            return $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
