<?php

use Illuminate\Database\Seeder;
use App\JenisBuku;

class JenisBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisBuku::create([
            'nama' => 'Fiksi',
            'keterangan' => 'Buku ini berkaitan dengan hal-hal yang bersifat fiksi',
        ]);

        JenisBuku::create([
            'nama' => 'Non Fiksi',
            'keterangan' => 'Buku ini berkaitan dengan hal - hal yang non fiksi',
        ]);
    }
}
