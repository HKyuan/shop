<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class UserMiddleware
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
        $access = false;

        $user_id = session()->get('user_id');

        if(!empty($user_id)){
            $User = User::where('id',$user_id)->first();
            
            $access = true;
        }
        if(!$access){
            $error=['message'=>'請登入已進行',];
            return redirect('/')->withErrors($error);
        }

        return $next($request);
    }
}
