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
            case 'success':
                Alert::success('this is success alert');
 return redirect('/');
 break;
            case 'info':
                Alert::info('Anda yakin ingin menghapusnya?')->persistent("Ok");
 return redirect('/danggota');
 break;
            case 'warning':
                Alert::warning('this is warning alert');
 return redirect('/danggota');
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
