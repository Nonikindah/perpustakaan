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


Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('alert/{AlertType}', 'sweetalertController@alert')->name('alert');


Route::group(['prefix' => 'buku'], function (){

    Route::get('', function (){
        $buku = \App\Buku::all();
        return view('admin.dbuku',['buku'=> $buku]);
    })->name('admin.buku');

    Route::get('tambah', function () {
        return view('admin.daftarbuku');
    })->name('admin.buku.daftarbuku');

    Route::get('edit', function () {
        return view('admin.editbuku');
    })->name('admin.buku.editbuku');

    Route::put('store', [
        'uses' => 'BukuController@store',
        'as' => 'admin.buku.store'
    ]);
});

Route::group(['prefix' => 'anggota'], function (){

    Route::get('', function (){
        $anggota = \App\Anggota::all();
        return view('admin.danggota',['anggota'=> $anggota]);
    })->name('admin.anggota');

   Route::get('tambah', function () {
        return view('admin.daftaranggota');
    })->name('admin.anggota.daftaranggota');

    Route::get('edit', function () {
        return view('admin.editanggota');
    })->name('admin.anggota.editanggota');

    Route::get('detail', function () {
        return view('admin.detailanggota');
    })->name('admin.detailanggota');

    Route::put('daftaranggota', [
        'uses'=>'AnggotaController@daftaranggota',
        'as' => 'admin.tambahanggota'
    ]);

});

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::post('store',[
    'uses'=> 'AnggotaController@store',
    'as' => 'daftar'
]);


Route::group(['prefix' => 'histori'], function (){
    Route::get('', function () {
        return view('admin.datapinjam');
    })->name('admin.pinjam');

    Route::get('tambah', function () {
        return view('admin.tambahpinjam');
    })->name('admin.pinjam.tambahpinjam');

    Route::get('pengembalian', function () {
        return view('admin.pengembalian');
    })->name('admin.pinjam.pengembalian');

    Route::get('perpanjangan', function () {
        return view('admin.formperpanjang');
    })->name('admin.pinjam.formperpanjang');

    Route::get('histori', function () {
        return view('admin.historipinjaman');
    })->name('admin.pinjam.historipinjaman');
});

Route::group(['prefix'=>'admin'], function (){

    Route::get('', function (){
        $admin = \App\User::all();
        return view('admin.dataadmin',['admin'=> $admin]);
    })->name('admin.admin');

    Route::get('tambah', function () {
        return view('admin.tambahadmin');
    })->name('admin.admin.register');

    Route::get('edit', function () {
        return view('admin.editadmin');
    })->name('admin.editadmin');

//    Route::post('store',[
//        'uses'=> 'Auth\RegisterController@store',
//        'as' => 'admin.store'
//    ]);
});