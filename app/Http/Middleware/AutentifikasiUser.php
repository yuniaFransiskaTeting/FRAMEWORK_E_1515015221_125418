<?php

namespace App\Http\Middleware;

use Closure;

class AutentifikasiUser
{
    private $auth;
    public function __construct()
    {
        $this->auth = app('auth');
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { if($this->auth->check()){
        return $next($request);
    }
    return redirect('login')->withErrors('silahkan Login Terlebih Dahulu');
    }
}
