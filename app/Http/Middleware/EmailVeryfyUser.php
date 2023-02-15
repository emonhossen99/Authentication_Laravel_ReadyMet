<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmailVeryfyUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$email)
    {
        if($email == 'mdxhamedemon@gmail.com'){
            return $next($request);
        }
        return redirect('/home');
    }

    /**
     * Handle tasks after the response has been sent to the browser.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate($request, $response)
    {
       echo 'Your Email is VeryFide!!';
    }
}
