<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
=======
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
>>>>>>> 94e036e2cf62c5efe5a838b0f9cfcb86ca9489a1
    {
        if (!Auth::user()->admin) {
        return redirect('home');
        }
<<<<<<< HEAD
=======
>>>>>>> 3512d717d28247febbf24c8d20f0c205379710e4
>>>>>>> a03de6b079db31d42fe5a5d21b97125250968ced
>>>>>>> 94e036e2cf62c5efe5a838b0f9cfcb86ca9489a1
        return $next($request);
    }
}
