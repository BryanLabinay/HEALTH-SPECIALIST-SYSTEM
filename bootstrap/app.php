<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\admin;
use App\Http\Middleware\doctor;
use App\Http\Middleware\user;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => Admin::class,
            'doctor' => Doctor::class,
            'user' => User::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
