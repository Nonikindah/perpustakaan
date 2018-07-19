<?php

use Illuminate\Database\Seeder;
use App\Kelurahan;
use Illuminate\Support\Facades\Storage;
use App\Kecamatan;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kecCount = 0;
        foreach (json_decode(Storage::get('kelurahan.json')) as $row){
            try{
                Kelurahan::create([
                    'no_prov' => $row->no_prov,
                    'no_kab' => $row->no_kab,
                    'no_kec' => $row->no_kec,
                    'no_kel' => $row->no_kel,
                    'nama' => $row->nama,
                    'kecamatan_id' => Kecamatan::where('no_prov', $row->no_prov)
                        ->where('no_kab', $row->no_kab)
                        ->where('no_kec', $row->no_kec)
                        ->first()->id
                ]);
            }
            catch (ErrorException $exception){
                Kelurahan::create([
                    'no_prov' => $row->no_prov,
                    'no_kab' => $row->no_kab,
                    'no_kec' => $row->no_kec,
                    'no_kel' => $row->no_kel,
                    'nama' => $row->nama,
                ]);
                $kecCount++;
            }
        }
        if ($kecCount != 0)
            print $kecCount." kelurahan tidak menemukan kecamatannya!\n";
    }
}
