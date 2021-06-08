<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
<<<<<<< HEAD
    {   if (!Auth::user()->admin){
        return redirect('home');
    }
=======
<<<<<<< HEAD
    {   if (!Auth::user()->admin){
        return redirect('home');
    }
=======
    {
        if (!Auth::user()->admin) {
        return redirect('home');
        }
>>>>>>> 3512d717d28247febbf24c8d20f0c205379710e4
>>>>>>> a03de6b079db31d42fe5a5d21b97125250968ced
        return $next($request);
    }
}
