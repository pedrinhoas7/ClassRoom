<?php

namespace App\Http\Controllers\professor;

use App\Http\Controllers\Controller;
use App\Models\aluno\Aluno;
use App\Models\anuncio\Anuncio;
use App\Models\materia\Materia;
use Illuminate\Http\Request;
use App\Models\professor\Professor as Professor;
use App\Models\professor\Rank;
use Exception;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
        $user = Auth::user();
        $professor = Professor::where('email', $user->email)->first();
        $materias = Materia::where('professor_id' , $professor->id )->paginate(10);
        $ranks = Rank::where('professor_id' , $professor->id )->first();
        $anuncios = Anuncio::paginate(3);
        if($ranks->score <= 20){
            $ranks['name'] = "INICIANTE";
            $ranks['badge'] = 'red';
            $ranks['next'] = 21;
        }
        if($ranks->score >= 20 && $ranks->score < 50){
            $rank['name'] = 'DESAFIANTE';
            $ranks['badge'] = 'blue';
        }

            return view('professor.dashboard',['materias' => $materias, 'ranks' => $ranks , 'anuncios' => $anuncios ]);
        }catch(Exception $e){
            return $e;
        }
        
    }

    public function login()
    {
        return view('auth.professor.login');
    }

    public function loginSubmit(Request $request)
    {
        $professor = Professor::all();
        return $professor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.professor.register');
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
