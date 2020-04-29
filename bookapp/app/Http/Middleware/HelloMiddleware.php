<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
            ['name'=>'小和田あかり', 'account'=>'Akari'],
            ['name'=>'跡部みう', 'account'=>'Atobe'],
            ['name'=>'最上もが', 'account'=>'mogatanpe'],
            ['name'=>'夢眠ねむ', 'account'=>'yumeminemu'],
        ];

        $request->merge(['data'=>$data]);

        return $next($request);
    }
}
