<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Database\QueryException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->api(append:\App\Http\Middleware\ValidateHeaderMiddleware::class );
        $middleware->api(append:\App\Http\Middleware\SetHeaderMiddleware::class );
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(fn(QueryException $e)=>errorQueryException());
        //
    })->create();


function errorQueryException(){
    return response()->json([
        "errors" => [
            "status" => 500,
            "title" => "Error en Base de Datos",
            "datail"=>"LA base de datos no responde, Intentalo más tarde"
        ]
    ]);
}