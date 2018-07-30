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

    Route::get('tambah', function () {
        return view('datamaster.tambahklasifikasi');
    })->name('datamaster.tambahklasifikasi');

    Route::put('daftar', [
        'uses'=>'KategoriController@daftarkategori',
        'as' => 'datamaster.tambah'
    ]);

    Route::get('edit/{id}', [
        'uses'=>'KategoriController@editkategori',
        'as' => 'datamaster.editklasifikasi'
    ]);

    Route::put('update', [
        'uses'=>'KategoriController@updatekategori',
        'as' => 'datamaster.updatekategori'
    ]);

    Route::delete('delete/{id}', [
        'uses'=>'KategoriController@deletekategori',
        'as' => 'datamaster.deletekategori'
    ]);

});

Route::group(['prefix'=>'datamaster/penerbit'], function (){

    Route::get('', function () {
        $penerbit = \App\Penerbit::paginate(15);
        return view('datamaster.datapenerbit',['penerbit'=> $penerbit]);
    })->name('penerbit');

    Route::get('tambah', function () {
        return view('datamaster.tambahpenerbit');
    })->name('datamaster.tambahpenerbit');

    Route::put('daftarpenerbit', [
        'uses'=>'PenerbitController@daftarpenerbit',
        'as' => 'datamaster.daftarpenerbit'
    ]);

    Route::get('edit/{id}', [
        'uses'=>'PenerbitController@editpenerbit',
        'as' => 'datamaster.editpenerbit'
    ]);

    Route::put('update', [
        'uses'=>'PenerbitController@updatepenerbit',
        'as' => 'datamaster.updatepenerbit'
    ]);

    Route::delete('delete/{id}', [
        'uses'=>'PenerbitController@deletepenerbit',
        'as' => 'datamaster.deletepenerbit'
    ]);

});

Route::group(['prefix'=>'datamaster/atribut'], function (){

    Route::get('', function () {
        $atribut = \App\Atribut::paginate(15);
        return view('datamaster.dataatribut',['atribut'=> $atribut]);
    })->name('atribut');

    Route::get('tambah', function () {
        return view('datamaster.tambahatribut');
    })->name('datamaster.tambahatribut');

    Route::put('daftaratribut', [
        'uses'=>'AtributController@daftaratribut',
        'as' => 'datamaster.daftaratribut'
    ]);

    Route::get('edit/{id}', [
        'uses'=>'AtributController@editatribut',
        'as' => 'datamaster.editatribut'
    ]);

    Route::put('update', [
        'uses'=>'AtributController@updateatribut',
        'as' => 'datamaster.updateatribut'
    ]);

    Route::delete('delete/{id}', [
        'uses'=>'AtributController@deleteatribut',
        'as' => 'datamaster.deleteatribut'
    ]);

});

Route::group(['prefix'=>'datamaster/rak'], function (){

    Route::get('', function () {
        $rak = \App\Rak::paginate(15);
        return view('datamaster.datarak',['rak'=> $rak]);
    })->name('rak');

    Route::get('tambah', function () {
        return view('datamaster.tambahrak');
    })->name('datamaster.tambahrak');

    Route::put('daftarrak', [
        'uses'=>'RakController@daftarrak',
        'as' => 'datamaster.daftarrak'
    ]);

    Route::get('edit/{id}', [
        'uses'=>'RakController@editrak',
        'as' => 'datamaster.editrak'
    ]);

    Route::put('update', [
        'uses'=>'RakController@updaterak',
        'as' => 'datamaster.updaterak'
    ]);

    Route::delete('delete/{id}', [
        'uses'=>'RakController@deleterak',
        'as' => 'datamaster.deleterak'
    ]);

});

Route::group(['prefix'=>'datamaster/subyek'], function (){

    Route::get('', function () {
        $subyek= \App\Subyek::paginate(15);
        return view('datamaster.datasubyek',['subyek'=> $subyek]);
    })->name('subyek');

    Route::get('tambah', function () {
        return view('datamaster.tambahsubyek');
    })->name('datamaster.tambahsubyek');

    Route::put('daftarsubyek', [
        'uses'=>'SubyekController@daftarsubyek',
        'as' => 'datamaster.daftarsubyek'
    ]);

    Route::get('edit/{id}', [
        'uses'=>'SubyekController@editsubyek',
        'as' => 'datamaster.editsubyek'
    ]);

    Route::put('update', [
        'uses'=>'SubyekController@updatesubyek',
        'as' => 'datamaster.updatesubyek'
    ]);

    Route::delete('delete/{id}', [
        'uses'=>'SubyekController@deletesubyek',
        'as' => 'datamaster.deletesubyek'
    ]);

});

Route::group(['prefix'=>'datamaster/asalbuku'], function (){

    Route::get('', function () {
        $asalbuku= \App\Asalbuku::paginate(15);
        return view('datamaster.dataasalbuku',['asalbuku'=> $asalbuku]);
    })->name('asalbuku');

    Route::get('tambah', function () {
        return view('datamaster.tambahasalbuku');
    })->name('datamaster.tambahasalbuku');

    Route::put('daftarasalbuku', [
        'uses'=>'AsalBukuController@daftarasalbuku',
        'as' => 'datamaster.daftarasalbuku'
    ]);

    Route::get('edit/{id}', [
        'uses'=>'AsalBukuController@editasalbuku',
        'as' => 'datamaster.editasalbuku'
    ]);

    Route::put('update', [
        'uses'=>'AsalBukuController@updateasalbuku',
        'as' => 'datamaster.updateasalbuku'
    ]);

    Route::delete('delete/{id}', [
        'uses'=>'AsalBukuController@deleteasalbuku',
        'as' => 'datamaster.deleteasalbuku'
    ]);

});

Route::group(['prefix'=>'datamaster/jenisbuku'], function (){

    Route::get('', function () {
        $jenisbuku= \App\Jenisbuku::paginate(15);
        return view('datamaster.datajenisbuku',['jenisbuku'=> $jenisbuku]);
    })->name('jenisbuku');

    Route::get('tambah', function () {
        return view('datamaster.tambahjenisbuku');
    })->name('datamaster.tambahjenisbuku');

    Route::put('daftarjenisbuku', [
        'uses'=>'JenisBukuController@daftarjenisbuku',
        'as' => 'datamaster.daftarjenisbuku'
    ]);

    Route::get('edit/{id}', [
        'uses'=>'JenisBukuController@editjenisbuku',
        'as' => 'datamaster.editjenisbuku'
    ]);

    Route::put('update', [
        'uses'=>'JenisBukuController@updatejenisbuku',
        'as' => 'datamaster.updatejenisbuku'
    ]);

    Route::delete('delete/{id}', [
        'uses'=>'JenisBukuController@deletejenisbuku',
        'as' => 'datamaster.deletejenisbuku'
    ]);

});