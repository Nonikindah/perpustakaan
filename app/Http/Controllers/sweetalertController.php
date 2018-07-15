<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class sweetalertController extends Controller
{
    public function alert($AlertType)
    {
        switch ($AlertType) {
            case 'message':
                Alert::message('this is message alert');
                return redirect('/');
                break;
            case 'basic':
                Alert::message('this is basic alert');
                return redirect('/');
                break;
            case 'tambahbuku':
                Alert::success('Berhasil ditambahkan')->persistent("Ok");
                return redirect('/dbuku');
                break;
            case 'updateanggota':
                Alert::success('Berhasil diupdate')->persistent("Ok")->autoclose(1000);;
                return redirect('/danggota');
                break;
            case 'perpanjang':
                Alert::success('Masa peminjaman berhasil diperpanjang')->persistent("Ok")->autoclose(1500);;
                return redirect('/datapinjam');
                break;
            case 'pengembalian':
                Alert::success('Pengembalian buku berhasil')->persistent("Ok")->autoclose(1500);;
                return redirect('/datapinjam');
                break;
            case 'tambahpinjam':
                Alert::success('Berhasil ditambahkan')->persistent("Ok");
                return redirect('/datapinjam');
                break;
            case 'hapusanggota':
            case 'success':
                Alert::success('Berhasil menambahkan Anggota')->persistent("Ok");
 return redirect('/danggota');
 break;
            case 'info':
                Alert::info('Anda yakin ingin menghapusnya?')->persistent("Ok");
                return redirect('/danggota');
                break;
            case 'warning':
                Alert::warning('this is warning alert');
                return redirect('/');
                break;
 return redirect('/danggota');
 break;
            case 'hapusadmin':
                Alert::warning('Anda yakin ingin menghapusnya?')->persistent("Ok");
 return redirect('/dataadmin');
 break;
            case 'tambahadmin':
                Alert::success('Berhasil menambahkan Anggota')->persistent("Ok");
return redirect('/dataadmin');
break;
            case 'error':
                Alert::error('this is error alert');
                return redirect('/');
                break;

            default:
                return redirect('/');
                break;
        }
    }
}
