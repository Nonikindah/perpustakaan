<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use PDF;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Hash;


class AdminController extends Controller
{
    public function store(Request $request){

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'alamat_lengkap' => 'required',
            'jenkel' => 'required',
            'telp' => 'required',
            'kelurahan_id' => 'required',
            'password' => 'required|string|min:3|confirmed', [
                'required' => 'Kolom di atas harus diisi',
                'min' => 'Kolom di atas setidaknya mengandung :digits karakter',
                'confirmed' => 'Password yang anda masukkan tidak sama'
            ]
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'alamat_lengkap' => $request['alamat_lengkap'],
            'jenkel' => $request['jenkel'],
            'telp' => $request['telp'],
            'kelurahan_id'=> $request['kelurahan_id'],
            'password' => bcrypt(Hash::make($request->password))
        ]);

        return redirect()->route('admin.admin')->with('success', 'Berhasil menambahkan Admin yang bernama '.$request->name);

    }

    public function edit(Request $request){
        $request = User::find($request->id);
        return view('admin.editadmin')->with('user',$request);
    }

    public function update(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'alamat_lengkap' => 'required',
            'jenkel' => 'required',
            'telp' => 'required',
            'kelurahan_id' => 'required',
            'hak_akses' =>'required'
        ]);
        $admin = User::find($request->id);

        return redirect()->route('admin.admin')->with('success', 'Berhasil mengubah data admin');
    }
    public function delete($request){
        $admin = User::findOrFail($request)->delete();
        return redirect()->route('admin.admin')->with('hapus');
    }

    public function ubahPassword(Request $request){
        $this->validate($request, [
            'password_lama' => 'required|string|min:6',
            'password' => 'required|string|min:3|confirmed'
        ], [
            'required' => 'Kolom di atas harus diisi',
            'min' => 'Kolom di atas setidaknya mengandung :digits karakter',
            'confirmed' => 'Password yang anda masukkan tidak sama'
        ]);

        if(Hash::check($request->password_lama, Auth::user()->password)){
            User::find(Auth::user()->id)->update([
                'password' => Hash::make($request->password)
            ]);
        }else{
            return back()->withErrors([
                    'password_lama' => "Password lama salah!!!!!!!!"
                ]);
        }

        return back()->with('success', 'Password anda berhasil diubah!');
    }
    
    public function cetakdataadmin(Request $request){
        $admin = User::all();
        $pdf = PDF::loadView('admin.pdfadmin', ['admin'=>$admin]);
        $pdf->setPaper('A4');
        set_time_limit(300);
        return $pdf->stream('LaporanAdmin.pdf');
    }
}
