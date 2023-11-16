<?php

namespace App\Http\Controllers\User\Auth;

use App\Customers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'cs/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customers');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'notel' => ['required', 'number','max:15'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    public function showRegistrationForm()
    {
        return view('frontend.register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
     $cus = New Customers;
     $cus->nama_lengkap  = $request->nama;
     $cus->no_telpon = $request->notel;
     $cus->email = $request->email;
     $cus->password = Hash::make($request->password);

     $cus->save();

     return redirect(url('cs/login'))->with('msg','Registrasi Berhasil Silahkan Login Untuk Masuk!');
 }
}
