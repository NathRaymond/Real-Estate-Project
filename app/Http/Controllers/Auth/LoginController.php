<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo;//= RouteServiceProvider::HOME;

     public function redirectTo()
    {
        //  dd(Auth::user()->user_type);
        switch (Auth::user()->user_type) {
            case "admin":
                    $this->redirectTo = '/admin';
              
                return $this->redirectTo;
                break;

            case "individual":
                    $this->redirectTo = '/password/change';
                return $this->redirectTo;
                break;

            default:
                $this->redirectTo = '/logout';
                return $this->redirectTo;
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

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
