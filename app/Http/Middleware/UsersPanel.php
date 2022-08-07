<?php

namespace App\Http\Middleware;

use App\Models\Offer;
use Closure;
use Illuminate\Support\Facades\Auth;

class UsersPanel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

//        dd($request->route());
        $offer = Offer::find($request->route()->parameter('id'));
        if (Auth::user() && Auth::user()->id==$offer['user_id']){

        return $next($request);

    }
        return redirect('/offer');
    }
}
