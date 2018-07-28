<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rezky Arisanti Putri',
            'email' => 'rezky@email.com',
            'password' => bcrypt('secret'),
            'alamat_lengkap' => 'Jalan Jetis Kulon Gang X',
            'jenkel' => 'Perempuan',
            'telp' => '082334404506',
            'kelurahan_id' => \App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get()->random()->id,
            'hak_akses' => 1
        ]);

        User::create([
            'name' => 'Nonik Indahwati',
            'email' => 'nonik@email.com',
            'password' => bcrypt('secret'),
            'alamat_lengkap' => 'Jalan Jetis Kulon Gang X',
            'jenkel' => 'Perempuan',
            'telp' => '0898765434567',
            'kelurahan_id' => \App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get()->random()->id,
            'hak_akses' => 1
        ]);

        User::create([
            'name' => 'Bu Naim',
            'email' => 'naim@email.com',
            'password' => bcrypt('secret'),
            'alamat_lengkap' => 'Jalan Jetis Kulon Gang X',
            'jenkel' => 'Perempuan',
            'telp' => '0898765434567',
            'kelurahan_id' => \App\Kabupaten::findByNo(7, 74)->getKelurahan()->orderBy('nama')->get()->random()->id,
            'hak_akses' => 2
        ]);
    }
}
