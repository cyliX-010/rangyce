<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;
    
    public function authenticated()
    {
        if(Auth::user()->user_type == 4){
            return redirect()->route('station_dashboard');            
            // return view('police_side.station_index', compact('station'));
        }
        elseif (Auth::user()->user_type == 2) {
            return redirect('/home');
        }
        elseif (Auth::user()->user_type >= 30 && Auth::user()->user_type <= 39) {
             return redirect('/hospital/home');  
        }
        elseif (Auth::user()->user_type == 0) {
            return redirect('/adminSide/home');
        }
        else
        {
            return redirect('/home');
        }    
    } 


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {             
        $this->middleware('guest')->except('logout');
    }
}
