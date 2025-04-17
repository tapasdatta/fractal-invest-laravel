<?php

use App\Console\Commands\BroadcastNewAssets;
use Illuminate\Foundation\Application;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //redirect guests to auth route
        $middleware->redirectGuestsTo(fn (Request $request) => route('auth'));

        //redirect authenticated users to dashboard route
        $middleware->redirectUsersTo(fn (Request $request) => route('dashboard'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->withSchedule(function (Schedule $schedule) {
        // Schedule the command to run every minute
        $schedule->command(BroadcastNewAssets::class)->everyMinute()->withoutOverlapping();
    })
    ->withCommands([
        BroadcastNewAssets::class,
    ])->create();
