<?php namespace App\Http\Middleware;

use Closure;

class test
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
         
         if ($request->session()->get('correo')==null)
        {
            return redirect('inicio');            
        } else 
         
         return $next($request);
    }

}
