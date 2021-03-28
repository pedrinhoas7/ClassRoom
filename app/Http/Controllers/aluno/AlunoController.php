<?php

namespace App\Http\Controllers\aluno;

use App\Http\Controllers\Controller;
use App\Models\aluno\Aluno;
use App\Models\anuncio\Anuncio;
use App\Models\materia\Materia;
use App\Models\pagamento\Pagamento;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller
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
            $anuncios = Anuncio::all();
            $count = 0;
            if($user->permissao == "ALUNO"){
                $pagamentos = Pagamento::where('user_id', $user->id)
                ->orderByDesc('id')
                ->get();
                foreach($pagamentos as $pagamento){
                    $materias[$count] = Materia::where('id', $pagamento->materia_id)->first();
                    $count++;
                }
                return view('aluno.dashboard',['materias' => $materias, 'anuncios' => $anuncios]);
            }
            
        }catch(Exception $e){
            $materias = Materia::all();
            return view('aluno.adicionarMateria',['materias' => $materias]);
        }
        
    }

    public function login()
    {
        return view('auth.aluno.login');
    }

    public function loginSubmit(Request $request)
    {
        $aluno = Aluno::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.aluno.register');
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
