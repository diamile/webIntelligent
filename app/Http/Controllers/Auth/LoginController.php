<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function redirectTo()

    {
    /*
    |----------------------------------------------------------------------------------------------------
    | Verification si l'utilisateur est un administrateur ou un client afin de le rediriger vers sa page .
    |-----------------------------------------------------------------------------------------------------
    */
        if ($this->guard()->user()->isAdmin()) {

            return '/home';

        }

        return '/client';

    }
     
   

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
