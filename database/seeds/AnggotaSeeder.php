<?php

use Illuminate\Database\Seeder;
use App\Anggota;
use Faker\Factory;
use App\Provinsi;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        Anggota::query()->delete();

        foreach (Provinsi::where('nama','SULAWESI TENGGARA')->get() as $provinsi)
        {
            foreach ($provinsi->getKelurahan(false) as $kelurahan)
            {
                for ($a = 0; $a <rand(1,10);$a++)
                {
                    Anggota::create([
                        'nama' => ($f = $faker->firstName).' '.($l = $faker->lastName),
                        'kelurahan_id' => $kelurahan->id,
                        'identitas' => $faker->unique()->numerify('################'),
                        'alamat_lengkap' => $faker->streetAddress,
                        'jenkel'=>$faker->randomElement($array = array ('Perempuan', 'Laki-laki')) ,
                        'pekerjaan' => $faker->randomElement($array = array ('PNS', 'Pelajar/Mahasiswa','Karyawan Swasta')),
                        'telp'=> $faker->phoneNumber
                    ]);
                }
            }
        }
    }
}
