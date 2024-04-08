<?php

namespace Wave\Http\Middleware;

use Closure;
use TCG\Voyager\Models\Role;

class Customer
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
        if( auth()->user()->role->name == 'customer' ){
            return $next($request);
        } else {
            return redirect('login'); 
        }
    }
}
