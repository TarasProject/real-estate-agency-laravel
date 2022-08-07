<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class UserEditPanel
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
//        dd($request->route());

        $user = User::find($request->route()->parameter('id'));

        if (Auth::user() && Auth::user()->id==$user['id']){

            return $next($request);

        }
        return redirect('/users');
    }
}
