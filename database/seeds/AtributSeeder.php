<?php

use Illuminate\Database\Seeder;
use App\Atribut;

class AtributSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atribut::create([
            'nama' => 'Peminjaman Mingguan',
            'batas_sewa' => '500',
            'harga_sewa' => '0',
            'denda' => '0',
        ]);

        Atribut::create([
            'nama' => 'INSTANSI',
            'batas_sewa' => '500',
            'harga_sewa' => '0',
            'denda' => '0',
        ]);

        Atribut::create([
            'nama' => 'Peminjaman Bulanan',
            'batas_sewa' => '30',
            'harga_sewa' => '0',
            'denda' => '0',
        ]);
    }
}
