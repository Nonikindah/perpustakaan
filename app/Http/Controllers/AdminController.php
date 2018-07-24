<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function store(Request $request){

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'alamat_lengkap' => 'required',
            'jenkel' => 'required',
            'telp' => 'required',
            'kelurahan_id' => 'required',
            'hak_akses' =>'required'
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'alamat_lengkap' => $request['alamat_lengkap'],
            'jenkel' => $request['jenkel'],
            'telp' => $request['telp'],
            'kelurahan_id'=> $request['kelurahan_id'],
            'hak_akses' =>$request['hak_akses']
        ]);

        return redirect()->route('admin.admin')->with('success', 'Berhasil menambahkan Admin yang bernama '.$request->name);

    }
}
