<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
    protected $redirectTo = '/home';

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
    public function store(Request $request)
    {
        dd($request->all());
        $this->validate(request(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
            'alamat_lengkap' => 'required|string|max:255',
            'jenkel' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'kelurahan_id' => 'required|integer',
            'hak_akses' =>'required|integer'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    public function create(array $data)
    {
       User::create([
            'nama' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'alamat_lengkap' => $data['alamat_lengkap'],
            'jenkel' => $data['jenkel'],
            'telepon' => $data['telepon'],
            'kelurahan_id'=> $data['kelurahan_id'],
            'hak_akses' =>$data['hak_akses']
        ]);

        return redirect('')->with('success', 'Berhasil menambahkan anggota yang bernama '.$data->name);

    }
    protected function redirectTo()
    {
        return redirect()->route('admin.admin');
    }
    protected function guard()
    {
        return Auth::guard('guard-name');
    }
}
