<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Closure;



class Localization
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

        if($request->cookie('lang')) {
            App::setLocale($request->cookie('lang'));
            Carbon::setlocale($request->cookie('lang'));
        }
        return $next($request);
    }
}
