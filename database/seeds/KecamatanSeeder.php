<?php

use Illuminate\Database\Seeder;
use App\Kecamatan;
use Illuminate\Support\Facades\Storage;
use App\Kabupaten;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kabCount = 0;
        foreach (json_decode(Storage::get('kecamatan.json')) as $row){
            try{
                Kecamatan::create([
                    'no_prov' => $row->no_prov,
                    'no_kab' => $row->no_kab,
                    'no_kec' => $row->no_kec,
                    'nama' => $row->nama,
                    'kabupaten_id' => Kabupaten::where('no_prov', $row->no_prov)
                        ->where('no_kab', $row->no_kab)
                        ->first()->id
                ]);
            }
            catch (ErrorException $exception){
                Kecamatan::create([
                    'no_prov' => $row->no_prov,
                    'no_kab' => $row->no_kab,
                    'no_kec' => $row->no_kec,
                    'nama' => $row->nama,
                ]);
                $kabCount++;
            }
        }
        if ($kabCount != 0)
            print $kabCount." kecamatan tidak menemukan kabupatennya!\n";
    }
}
