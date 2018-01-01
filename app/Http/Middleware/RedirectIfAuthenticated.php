<?php

namespace App\Http\Middleware;
use DB;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      //  dd($request);
        //$user = DB::table('users')->where('email', $request->email)->first();
//dd($user->is_admin);
//        if ($user->is_user==0 ||strpos($request->path(), 'admin') !== true ) {
//            return $next($request);
//        }else{redirect('/fee');}
        //dd(redirect()->back());
        if (Auth::guard($guard)->check()) {
            return redirect('/');
           // return redirect()->back();
        }

        return $next($request);
    }
}
