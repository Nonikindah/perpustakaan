<?php

use Illuminate\Database\Seeder;
use App\ItemBuku;
use App\Buku;

class ItemBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Buku::where('kode_buku', '1') as $buku)
        {
            for ($c = 0; $c <= rand(1,5); $c++){
                dd($c);
                ItemBuku::create([
                    'no_induk' => $c,
                    'buku_id' => '1'
                ]);
            }
        }


    }
}
