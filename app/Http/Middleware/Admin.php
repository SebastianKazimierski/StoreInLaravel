<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
Use Auth;

class Admin
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
        if(!Auth::check()){
            return redirect()->route('login');
        }
        
        if(Auth::user()->role == 'user'){
            return redirect()->route('user');
        }

        if (Auth::user()->role == 'admin'){
            return redirect()->route('admin');
        }
    }
        
}
