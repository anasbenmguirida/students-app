<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
        public function handle(Request $request, Closure $next, string $role)
        {
    //check si le role existe , si oui on le convertie en tableau pour gerer le cas des routes pour plusieurs role
            $roles = !is_null($role) ? (is_array($role) ? $role : explode('|', $role)) : [];
    
            // Vérifiez si l'utilisateur authentifié a l'un des rôles qui sont dans le tableau $roles
            if (in_array($request->user()->role, $roles)) {
                return $next($request);
            }
    
            // Si l'utilisateur n'a pas le rôle requis, l'acces sera rejete 
            abort(403);
        }
    }

