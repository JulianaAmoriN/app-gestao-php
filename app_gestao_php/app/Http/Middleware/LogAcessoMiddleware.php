<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;
use App\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($request);
         $ip = $request->server->get('REMOTE_ADDR');
         $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "IP $ip requisitou rota $rota"]);
        
        //return $next($request);
        $resposta =  $next($request);
        $resposta->setStatusCode(201, 'mudei');

       return $resposta;
    
    }
}
