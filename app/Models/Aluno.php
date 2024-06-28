<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table = 'tblalunos';
    protected $primaryKey = 'idAluno';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

    // de acordo com o nome q ta no banco
}

// essa parte é referente ao banco de dados, com a informações de la, principalmente com o primaryKey que é o 'id' da tabela do meu banco, e o tipo usuario
