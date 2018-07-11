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
            'name' => 'Rezky Arisan',
            'email' => 'rezky@email.com',
            'password' => bcrypt('secret'),
            'alamat' => 'Mojokerto',
            'hak_akses' => 1
        ]);
    }
}
