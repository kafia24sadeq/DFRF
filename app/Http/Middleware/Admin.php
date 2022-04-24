<?php


namespace Systems\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;



class Admin
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle($request, Closure $next, $guard = null)
  {

    if (Auth::guard($guard)->guest()) {
      if ($request->ajax() || $request->wantsJson()) {
        return response()->json(['error' => trans('admin.unauthorized')], '401');
      } else {
        return redirect()->guest('login');
      }
    }

//      dd (Route::currentRouteName());
    $perm =  str_replace('admin.', '', Route::currentRouteName());


    if (ends_with($perm, 'store' )) {
      $perm = str_replace('store','create',$perm);
    }elseif(ends_with($perm, 'update' )){
        $perm = str_replace('update','edit',$perm);
    }

    if (!Auth::user()->can($perm) ) {
    return redirect('admin/controlpanel');

  }



    return $next($request);

  }



}
