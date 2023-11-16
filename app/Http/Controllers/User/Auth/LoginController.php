<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Customers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customers')->except('logout');
    }

    public function showLoginForm()
    {
        return view('frontend.login');
    }   

    public function login(Request $request)
    {
        if (auth()->guard('customers')->attempt(['email' => $request->email, 'password' => $request->password])) {

           return redirect('/');
       }
       return back()->with('notif','Email or password are wrong.');
   }

   public function signout(Request $request)
   {
    $this->guard()->logout();

    $request->session()->invalidate();

    return redirect('/');
}
}
