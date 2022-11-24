<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CkeckAuthLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        $email=$request->email;
        $password=$request->password;
        
        $info_user=User::whereEmail($email,function($query){
            DB::table('users')
            ->where('Status', 'مفعل');
        })->first();

        if($info_user)
        return $next($request); 
        return null;
        

        
    }
}
