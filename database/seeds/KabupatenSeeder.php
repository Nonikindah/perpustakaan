<?php

use Illuminate\Database\Seeder;
use App\Kabupaten;
use Illuminate\Support\Facades\Storage;
use App\Provinsi;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provCount = 0;
        foreach (json_decode(Storage::get('kabupaten.json')) as $row){
            try{
                Kabupaten::create([
                    'no_prov' => $row->no_prov,
                    'no_kab' => $row->no_kab,
                    'nama' => $row->nama,
                    'provinsi_id' => Provinsi::where('no_prov', $row->no_prov)->first()->id
                ]);
            }
            catch (ErrorException $exception){
                Kabupaten::create([
                    'no_prov' => $row->no_prov,
                    'no_kab' => $row->no_kab,
                    'nama' => $row->nama,
                ]);
                $provCount++;
            }
        }
        if ($provCount != 0)
            print $provCount." kabupaten tidak menemukan provinsinya!\n";
    }
}
