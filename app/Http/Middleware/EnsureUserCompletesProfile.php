<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserCompletesProfile
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
        //check the user type
        //if the user is an indiviual check if user has completed his profile page
        //if the user is a company check if the company has completed their profile information
        //if user has not fully completed their profile information redirect them to user profile page completion - same for company
        //if individual / company has completed their profile information, navigate them to their profile page

        if (Auth::user()->user_type == 'individual') {
            if (is_null(Auth::user()->profile)) {
                return redirect()->route('userprofile');
            }
        }else {
            if (is_null(Auth::user()->profile)) {
                return redirect()->route('companyprofile');
            }
        }
        // return redirect('/');

        return $next($request);
    }
}
