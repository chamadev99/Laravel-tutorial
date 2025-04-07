<?php

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->render(function (AuthenticationException $exception, $request) {
            return false;
        });

        $exceptions->report(function (AuthenticationException $exception, $request) {
            return response()->json([
                'message' => 'UNAUTHENTICATED',
                'data' => $exception,
            ], 401);
        });

        $exceptions->render((function (ValidationException $exception, $request) {
            return false;
        }));

        $exceptions->report((function (ValidationException $exception, $request) {
            return response()->json([
                'message' => 'UNPROCESSABLE ENTITY',
                'data' => $exception->errors(),
            ], 422);
        }));
    })->create();
