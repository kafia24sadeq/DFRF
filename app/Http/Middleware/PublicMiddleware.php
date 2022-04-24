<?php

namespace Systems\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Systems\Advertisement;
use View;


class PublicMiddleware
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

//        Carbon::setLocale('ar_YE.utf8');


        $ads = Advertisement::all();

        foreach ($ads as $ad){
            view()->share("$ad->area" , $ad->content);
        }

        $response = $next($request);



        return $response;
    }
}
