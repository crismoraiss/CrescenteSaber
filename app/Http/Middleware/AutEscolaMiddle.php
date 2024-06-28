<?php

namespace App\Http\Middleware;

use App\Models\Usuario;
use App\Models\Aluno;
use App\Models\Funcionario;
use Closure;
use Illuminate\Http\Request;

class AutEscolaMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $tipoUser)
    {
        $email = session('email');

        if (!$email) {
            return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
        }

        $usuario = Usuario::where('emailUsuario', $email)->first();

        if (!$usuario) {
            return redirect()->route('login')->withErrors(['email' => 'Usuário não encontrado']);
        }

        $tipoUsuario = $usuario->tipo_usuario;

        // Verifica se o tipo de usuário é válido
        if (!$tipoUsuario instanceof Aluno && !$tipoUsuario instanceof Funcionario) {
            return back()->withErrors(['email' => 'Tipo de usuário inválido']);
        }

        // Verifica se o tipo de usuário coincide com o tipo especificado
        if ($tipoUsuario instanceof Aluno && $tipoUser === 'aluno') {
            return $next($request);
        } elseif ($tipoUsuario instanceof Funcionario && $tipoUser === $tipoUsuario->tipoFuncionario) {
            return $next($request);
        } else {
            return back()->withErrors(['email' => 'Acesso não permitido para esse perfil']);
        }
    }

}
