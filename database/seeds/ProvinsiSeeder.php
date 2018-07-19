<?php

use Illuminate\Database\Seeder;
use App\Provinsi;
use Illuminate\Support\Facades\Storage;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (json_decode(Storage::get('provinsi.json')) as $row){
            Provinsi::create([
                'no_prov' => $row->no_prov,
                'nama' => $row->nama
            ]);
        }
    }
}
