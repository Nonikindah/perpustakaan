<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('index');
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/dataadmin', function () {
    return view('admin.dataadmin');
})->name('admin.admin');
Route::get('/tambahadmin', function () {
    return view('admin.tambahadmin');
})->name('admin.admin');
Route::get('/editadmin', function () {
    return view('admin.editadmin');
})->name('admin.admin');
Route::get('/datapinjam', function () {
    return view('admin.datapinjam');
})->name('admin.pinjam');
Route::get('/tambahpinjam', function () {
    return view('admin.tambahpinjam');
})->name('admin.pinjam');
Route::get('/kembali', function () {
    return view('admin.kembali');
})->name('admin.pinjam');

Route::get('/dashboard/daftaranggota', function () {
    return view('admin.daftaranggota');
});

Route::get('/dashboard/daftarbuku', function () {
    return view('admin.daftarbuku');
});

Route::get('/dashboard/dbuku', function () {
    return view('admin.dbuku');
});

Route::get('/dashboard/danggota', function () {
    return view('admin.danggota');
});

Route::get('/dashboard/detailanggota', function () {
    return view('admin.detailanggota');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
