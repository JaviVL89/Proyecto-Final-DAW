<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Añadir cabeceras para permitir CORS
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');

        // Si deseas ser más específico en lugar de permitir cualquier origen, puedes condicionar esto con una lógica que verifique los orígenes.
        // Por ejemplo:
        // if (in_array($request->getHost(), ['localhost:3000', 'example.com'])) {
        //     $response->headers->set('Access-Control-Allow-Origin', $request->getHost());
        // }

        return $response;
    }
}
