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
        return view('admin.databuku',['buku'=> $buku]);
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

    Route::get('detailbuku', function (){
        $buku = \App\Buku::all();
        return view('admin.detailbuku',['buku'=> $buku]);
    })->name('admin.buku.detailbuku');

    Route::get('tambahitem', function () {
        return view('admin.tambahitem');
    })->name('admin.buku.tambahitem');
});

Route::group(['prefix' => 'anggota'], function (){

    Route::get('', function (){
        $anggota = \App\Anggota::paginate(15);
        return view('admin.dataanggota',['anggota'=> $anggota]);
    })->name('admin.anggota');

   Route::get('tambah', function () {
        return view('admin.daftaranggota');
    })->name('admin.anggota.daftaranggota');

    Route::get('edit/{id}', [
        'uses'=>'AnggotaController@editanggota',
        'as' => 'admin.anggota.editanggota'
    ]);

    Route::put('update', [
        'uses'=>'AnggotaController@updateanggota',
        'as' => 'admin.updateanggota'
    ]);

    Route::delete('delete/{id}', [
        'uses'=>'AnggotaController@deleteanggota',
        'as' => 'admin.deleteanggota'
    ]);
    
    Route::get('detail', function () {
        return view('admin.detailanggota');
    })->name('admin.detailanggota');

    Route::put('daftar', [
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

    Route::get('', function (){
        $pinjam = \App\Pinjam::all();
        return view('admin.datapinjam',['pinjam'=> $pinjam]);
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

    Route::put('store',[
       'uses'=>'PinjamController@store',
        'as'=>'admin.pinjam.store'
    ]);
});

Route::group(['prefix'=>'admin'], function (){

    Route::get('', function (){
        $admin = \App\User::all();
        return view('admin.dataadmin',['admin'=> $admin]);
    })->name('admin.admin');

    Route::get('tambah', function () {
        return view('admin.tambahadmin');
    })->name('admin.admin.register');

    Route::get('edit/{id}', [
        'uses'=>'AdminController@edit',
        'as' => 'admin.editadmin'
    ]);

    Route::put('store',[
        'uses'=> 'AdminController@store',
        'as' => 'admin.tambah'
    ]);
    Route::put('update', [
        'uses'=>'AdminController@update',
        'as' => 'admin.update'
    ]);
});

Route::group(['prefix'=>'datamaster/klasifikasi'], function (){

    Route::get('', function () {
        $klasifikasi = \App\Kategori::paginate(15);
        return view('datamaster.dataklasifikasi',['klasifikasi'=> $klasifikasi]);
    })->name('klasifikasi');

});

Route::group(['prefix'=>'datamaster/penerbit'], function (){

    Route::get('', function () {
        $penerbit = \App\Penerbit::paginate(15);
        return view('datamaster.datapenerbit',['penerbit'=> $penerbit]);
    })->name('penerbit');

});

Route::group(['prefix'=>'datamaster/atribut'], function (){

    Route::get('', function () {
        $atribut = \App\Atribut::paginate(15);
        return view('datamaster.dataatribut',['atribut'=> $atribut]);
    })->name('atribut');

});

Route::group(['prefix'=>'datamaster/rak'], function (){

    Route::get('', function () {
        $rak = \App\Rak::paginate(15);
        return view('datamaster.datarak',['rak'=> $rak]);
    })->name('rak');

});

Route::group(['prefix'=>'datamaster/subyek'], function (){

    Route::get('', function () {
        $subyek= \App\Subyek::paginate(15);
        return view('datamaster.datasubyek',['subyek'=> $subyek]);
    })->name('subyek');

});

Route::group(['prefix'=>'datamaster/asalbuku'], function (){

    Route::get('', function () {
        $asalbuku= \App\Asalbuku::paginate(15);
        return view('datamaster.dataasalbuku',['asalbuku'=> $asalbuku]);
    })->name('asalbuku');

});

Route::group(['prefix'=>'datamaster/jenisbuku'], function (){

    Route::get('', function () {
        $jenisbuku= \App\Jenisbuku::paginate(15);
        return view('datamaster.datajenisbuku',['jenisbuku'=> $jenisbuku]);
    })->name('jenisbuku');

});