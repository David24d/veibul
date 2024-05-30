<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DispatchToController
{
    public function handle($request, Closure $next)
    {
        // Verifica alguna condición para determinar qué controlador y método utilizar
        if ($request->is('entrada*')) {
            $controller = '\App\Http\Controllers\EntradaController';
            $method = 'index';
        } elseif ($request->is('portafolio*')) {
            $controller = '\App\Http\Controllers\PortafolioController';
            $method = 'index';
        } elseif ($request->is('servicio*')) {
            $controller = '\App\Http\Controllers\ServicioController';
            $method = 'index';
        }

        // Ejecuta el controlador y método determinados
        return app()->make($controller)->callAction($method, $parameters = []);
    }
  
}
