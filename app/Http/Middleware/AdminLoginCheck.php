<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminLoginCheck
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
        $admin_login=Session::get('id');
       if(empty($admin_login)){
           return redirect('/admin');
       }
        return $next($request);
    }
}
