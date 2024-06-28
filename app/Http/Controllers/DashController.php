<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function administrativo()
    {
        return view('dashboard.administrativo.administrativo');
        
    }

    public function alunosAdm(){
        return view('dashboard.administrativo.alunosAdm');
    }

    public function formAluno(){
        return view('dashboard.administrativo.formAluno');
    }

    public function aluno()
    {
        return view('dashboard.aluno.aluno');
    }


    public function educador()
    {
        return view('dashboard.educador.educador');
    }
}
