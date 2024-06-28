<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EnsinoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\JardimController;
use App\Http\Controllers\JardmimController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaternalController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [homeController::class, 'index'])->name('/');

// blog

Route::get('/blog', [homeController::class, 'blogum'])->name('blog.blogum');

Route::get('/blog2', [homeController::class, 'blogdois'])->name('blog.blogdois');

Route::get('/blog3', [homeController::class, 'blogtres'])->name('blog.blogtres');

Route::get('/blog4', [homeController::class, 'blogquatro'])->name('blog.blogquatro');

//

Route::get('/galeria', [GaleriaController::class, 'index'])->name('galeria');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');


Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');


Route::post('/contato/enviarNew', [ContatoController::class, 'salvarNoEmail'])->name('contato.enviarNew');


Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

Route::get('/jardim', [JardimController::class, 'index'])->name('jardim');

Route::get('/maternal', [MaternalController::class, 'index'])->name('maternal');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'autenticar'])->name('login');


// DASHBOARD


Route::middleware(['autenticacao:aluno'])->group(function (){
    Route::get('/dashboard/aluno/aluno', [DashController::class, 'aluno'])->name('dashboard.aluno.aluno');
});


Route::middleware(['autenticacao:administrativo'])->group( function(){
    Route::get('/dashboard/administrativo/administrativo', [DashController::class, 'administrativo'])->name('dashboard.administrativo.administrativo');
    Route::get('/dashboard/administrativo/alunosAdm', [DashController::class, 'alunosAdm'])->name('dashboard.administrativo.alunosAdm');
    Route::get('/dashboard/administrativo/formAluno', [DashController::class, 'formAluno'])->name('dashboard.administrativo.formAluno');
});


Route::middleware(['autenticacao:educador'])->group( function(){
    Route::get('/dashboard/educador/educador', [DashController::class, 'educador'])->name('dashboard.educador.educador');
});


// Ensino
Route::get('/ensino/maternal', [EnsinoController::class, 'maternal'])->name('site.ensino.maternal');
Route::get('/ensino/jardim', [EnsinoController::class, 'jardim'])->name('site.ensino.jardim');



