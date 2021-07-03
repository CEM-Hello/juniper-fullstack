<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use App\Models\Role as Ro;
class Role


{
   /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {  
        $user = Auth::user();
        
        foreach($roles as $role){
            $ro = Ro::where('title', $role)->first();

            if($user->roles->contains($ro)){
                return $next($request);
            } else{
                return redirect('/dashboard');
            }

        }
        dd($roles);
        if(!Auth::check()){
            return redirect('/login');
        }
        
    }
}
