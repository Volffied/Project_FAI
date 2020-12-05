<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
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
        if(session()->has('adminLog')){
            $userAvail=session()->get('adminLog');
            if($userAvail->jenis==1){
                return $next($request);
            }
        }
        return redirect('errors/404');
    }
}
