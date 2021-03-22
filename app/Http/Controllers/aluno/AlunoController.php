<?php

namespace App\Http\Controllers\aluno;

use App\Http\Controllers\Controller;
use App\Models\aluno\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'ola'
        ]);
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
