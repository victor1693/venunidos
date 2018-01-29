<?php namespace App\Http\Middleware;

use Closure;

class gestores {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		  if ($request->session()->get('gestor_id')==null)
        {
            return redirect('manager');            
        } else 
         
         return $next($request);
	}

}
