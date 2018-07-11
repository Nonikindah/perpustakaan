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
})->name('katalog');
Route::get('/detail', function () {
    return view('detail');
})->name('detail');
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin/dashboard');

Route::get('/tambahadmin', function () {
    return view('admin.tambahadmin');
})->name('admin/tambahadmin');
Route::get('/editadmin', function () {
    return view('admin.editadmin');
})->name('admin/editadmin');
Route::get('/dataadmin', function () {
    return view('admin.dataadmin');
})->name('admin/admin');

Route::get('/tambahpinjam', function () {
    return view('admin.tambahpinjam');
})->name('admin/tambahpinjam');
Route::get('/pengembalian', function () {
    return view('admin.pengembalian');
})->name('admin/pengembalian');
Route::get('/datapinjam', function () {
    return view('admin.datapinjam');
})->name('admin/pinjam');

Route::get('/daftaranggota', function () {
    return view('admin.daftaranggota');
})->name('admin/daftaranggota');
Route::get('/detailanggota', function () {
    return view('admin.detailanggota');
})->name('admin/detailanggota');
Route::get('/editanggota', function () {
    return view('admin.editanggota');
})->name('admin/editanggota');
Route::get('/danggota', function () {
    return view('admin.danggota');
})->name('admin/anggota');

Route::get('daftarbuku', function () {
    return view('admin.daftarbuku');
})->name('admin/daftarbuku');
Route::get('dbuku', function () {
    return view('admin.dbuku');
})->name('admin/buku');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
