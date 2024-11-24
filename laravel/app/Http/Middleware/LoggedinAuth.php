<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class LoggedinAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $user = Auth::user();
            $currentPath = $request->path(); 

            if ($user->usertype == 'admin'&& $currentPath !== 'management') {
                return redirect('/management'); 
            } elseif ($user->usertype == 'volunteer' && $currentPath !== 'volunteer') {
                return redirect('/volunteer');
            }

            return $next($request); 
        }

        return(redirect("/"));
        
    }
}
