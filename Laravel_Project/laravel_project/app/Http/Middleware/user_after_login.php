<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;


class user_after_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!(Session()->has('uid')))
        {
            Alert::error('Login First','Please Login First');
           return redirect('/Login');
        }
        return $next($request);
    }
}
