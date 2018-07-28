<?php

use Illuminate\Database\Seeder;
use App\Rak;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = '[{"rak_id":"3","nama":"Referensi","keterangan":"","kode":"R","rak_parent_id":"0"},{"rak_id":"4","nama":"Rak Gol.800","keterangan":"","kode":"Kesusastraan","rak_parent_id":"0"},{"rak_id":"1","nama":"Library","keterangan":"","kode":"Lib","rak_parent_id":"0"},{"rak_id":"2","nama":"Ruang Anak","keterangan":"","kode":"RA","rak_parent_id":"0"},{"rak_id":"5","nama":"Rak Gol 200","keterangan":"","kode":"Agama","rak_parent_id":"0"},{"rak_id":"6","nama":"Rak Gol 300","keterangan":"","kode":"Ilmu Sosial","rak_parent_id":"0"},{"rak_id":"7","nama":"Rak Gol 500","keterangan":"","kode":"Ilmu Pasti","rak_parent_id":"0"},{"rak_id":"8","nama":"Rak Gol 400","keterangan":"","kode":"Bahasa","rak_parent_id":"0"},{"rak_id":"9","nama":"Rak Gol 600","keterangan":"","kode":"Ilmu  Terapan","rak_parent_id":"0"},{"rak_id":"10","nama":"Rak Gol 700","keterangan":"","kode":"Kesenian & Olahraga","rak_parent_id":"0"},{"rak_id":"11","nama":"Rak Gol 100","keterangan":"","kode":"Filsafat & psikologi","rak_parent_id":"0"},{"rak_id":"12","nama":"Rak Gol 000","keterangan":"","kode":"Karya Umum","rak_parent_id":"0"},{"rak_id":"13","nama":"Rak Gol.900","keterangan":"","kode":"Geografi & Sejarah","rak_parent_id":"0"}]';

        foreach (json_decode($data) as $rak){
            Rak::create([
                'nama' => $rak->nama,
                'keterangan' => $rak->keterangan,
                'kode' => $rak->kode,
                'rak_parent_id' => $rak->rak_parent_id
            ]);
        }
    }
}
