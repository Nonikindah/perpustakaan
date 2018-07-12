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

Route::get('/dataadmin/tambahadmin', function () {
    return view('admin.tambahadmin');
})->name('admin/admin/tambahadmin');

Route::get('/editadmin', function () {
    return view('admin.editadmin');
})->name('admin/editadmin');

Route::get('/dataadmin', function () {
    return view('admin.dataadmin');
})->name('admin/admin');

Route::get('/datapinjam', function () {
    return view('admin.datapinjam');
})->name('admin/pinjam');

Route::get('/datapinjam/tambahpinjam', function () {
    return view('admin.tambahpinjam');
})->name('admin/pinjam/tambahpinjam');

Route::get('/pengembalian', function () {
    return view('admin.pengembalian');
})->name('admin/pengembalian');

Route::get('/detailanggota', function () {
    return view('admin.detailanggota');
})->name('admin/detailanggota');

Route::get('/danggota/editanggota', function () {
    return view('admin.editanggota');
})->name('admin/anggota/editanggota');

//Route::get('/editanggota', function () {
//    return view('admin.editanggota');
//})->name('admin/editanggota');

Route::get('/danggota', function () {
    return view('admin.danggota');
})->name('admin/anggota');

Route::get('/danggota/daftaranggota', function () {
    return view('admin.daftaranggota');
})->name('admin/anggota/daftaranggota');

Route::get('dbuku', function () {
    return view('admin.dbuku');
})->name('admin/buku');

Route::get('dbuku/daftarbuku', function () {
    return view('admin.daftarbuku');
})->name('admin/buku/daftarbuku');

Route::get('formperpanjang', function () {
    return view('admin.formperpanjang');
})->name('admin/perpanjang');

Route::get('historipinjaman', function () {
    return view('admin.historipinjaman');
})->name('admin/historipinjaman');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
