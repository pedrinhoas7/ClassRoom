<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aluno\AlunoController;
use App\Http\Controllers\professor\ProfessorController;
use App\Http\Controllers\livro\LivroController;
use App\Http\Controllers\materia\MateriaController;
use App\Http\Controllers\teste\TesteController;
use App\Http\Controllers\video\VideoController;
use App\Http\Controllers\listaPresenca\ListaPresencaController;
use App\Http\Controllers\pagamento\PagamentoController; 
use App\Http\Controllers\Auth\aluno\RegisterController as RegisterAlunoController;
use App\Http\Controllers\Auth\professor\RegisterProfessorController;
use App\Http\Controllers\Auth\aluno\LoginController as LoginAlunoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/* ROTAS ALUNO */

/* CADASTRA ALUNO */
Route::post('/register/aluno', [RegisterAlunoController::class, 'register'] )->name('register/aluno');

/* LOGIN */
Route::get('/auth/aluno/register',[AlunoController::class, 'register'])->name('auth/aluno/register');

/* INTERNO */
Route::get('/ALUNO', function () {
    return view('aluno.dashboard');
});


/* ROTAS PROFESSOR */

/* CADASTRA PROFESSOR */
Route::post('/register/professor', [RegisterProfessorController::class, 'register'] )->name('register/professor');

/* LOGIN */
Route::get('/auth/professor/register',[ProfessorController::class, 'register'])->name('auth/professor/register');

/* INTERNO */
Route::get('/PROFESSOR', function () {
    return view('professor.dashboard');
});

/* ROTAS LIVRO */
Route::post('/livro', [LivroController::class, 'store'] );

/* ROTAS MATERIA */
Route::post('/materia', [MateriaController::class, 'store'] );

/* ROTAS LISTA DE PRESENÇA */
Route::post('/lista-presenca', [ListaPresencaController::class, 'store'] );

/* ROTAS PAGAMENTO */
Route::post('/pagamento', [PagamentoController::class, 'store'] );

/* ROTAS TESTE E AVALIAÇÕES */
Route::post('/teste', [TesteController::class, 'store'] );

/* ROTAS VIDEO */
Route::post('/video', [VideoController::class, 'store'] );



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
