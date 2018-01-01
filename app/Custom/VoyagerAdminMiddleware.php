<?php

namespace App\Custom;

use Closure;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;


use DB;
use TCG\Voyager\Http\Middleware\VoyagerAdminMiddleware as vMiddleware;
class VoyagerAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guest()) {
            $user = Voyager::model('User')->find(Auth::id());
            //fathi
            if($user->is_user==1){return redirect('/404');}
//fathi
            return $user->hasPermission('browse_admin') ? $next($request) : redirect('/');
        }
       else{

           return response()->view('vendor.voyager.login.login');

            //if ($request->path()=='admin/login') {
            //return redirect($urlLogin)->with('url.intended', $urlIntended);
            //}
//    }else {
//       return redirect($urlLogin)->with('url.intended', $urlIntended);
//   }
           //abort(403, 'Unauthorized action.');


            //return  view('voyager:login');
            // return redirect()->route('voyager.login');

//    return view('app.vendor.tcg.voyager.resources.views.login');
//return route('voyager.login');
//    return header("location:/admin/login");
        }


    }
}
