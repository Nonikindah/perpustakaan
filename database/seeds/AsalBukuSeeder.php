<?php

use Illuminate\Database\Seeder;
use App\AsalBuku;

class AsalBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AsalBuku::create([
            'nama' => 'PB',
            'keterangan' => 'Pengadaan Barang'
        ]);

        AsalBuku::create([
            'nama' => 'H',
            'keterangan' => 'Hadiah'
        ]);
    }
}
