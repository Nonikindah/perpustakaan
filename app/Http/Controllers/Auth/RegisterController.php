<?php

namespace App\Http\Controllers\Auth;

use App\Anggota;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
            'identitas' => 'required|string|max:16',
            'alamat' => 'required|string|max:255',
            'jenkel' => 'required|string|max:10',
            'pekerjaan' => 'required|int',
            'telepon' => 'required|string|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Anggota::create([
            'nama' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
            'identitas' => $data['identitas'],
            'alamat' => $data['alamat'],
            'jenkel' => $data['jenkel'],
            'pekerjaan' => $data['pekerjaan'],
            'telepon' => $data['telepon']
        ]);

    }
    protected function redirectTo()
    {
        return '/path';
    }
    protected function guard()
    {
        return Auth::guard('guard-name');
    }
}
