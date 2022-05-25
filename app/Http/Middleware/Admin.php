<?php

namespace App\Http\Middleware;

use Closure;
use Faker\Provider\ar_SA\Color;
use Symfony\Component\Console\Style\StyleInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class Admin
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
        if($request->user()->id!=1){
            
            return redirect()->back()->with ('mensaje','ACCESO DENEGADO, SOLO ADMINS :(');
            
        }

        return $next($request);
      
    }
}
