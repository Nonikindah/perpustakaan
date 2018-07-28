<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \Illuminate\Database\Eloquent\Model::unguard();
        $this->call(ProvinsiSeeder::class);
        $this->call(KabupatenSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(KelurahanSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AnggotaSeeder::class);
        $this->call(PenerbitSeeder::class);
        $this->call(AsalBukuSeeder::class);
        $this->call(AtributSeeder::class);
        $this->call(JenisBukuSeeder::class);
        $this->call(RakSeeder::class);
        $this->call(SubyekSeeder::class);
        $this->call(KategoriSeeder::class);
    }
}
