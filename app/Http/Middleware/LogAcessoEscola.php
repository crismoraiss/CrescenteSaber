<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\LogAcesso;
use Illuminate\Http\Request;

class LogAcessoEscola
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Registra o acesso à escola no banco de dados
        $ip = $request->server->get('REMOTE_ADDR'); // Obter o endereço IP do cliente de forma segura
        $url = $request->getRequestUri();

        LogAcesso::create(['log' => "IP: $ip requisitou na rota: $url da aplicação"]);

        // Chama o próximo middleware na cadeia
        return $next($request);
    }
}
