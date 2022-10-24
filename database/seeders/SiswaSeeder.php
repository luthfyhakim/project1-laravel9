<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); // inisialisasi dgn kode negara indonesia
        for ($i = 1; $i <= 100; $i++) {
            $gender = $faker->randomElement($array = array('Male', 'Female'));
            $image = $faker->randomElement($array = array('ft1.jpeg', 'ft2.jpeg'));
            $kelas = $faker->randomElement($array = array('X', 'XI', 'XII'));
            DB::table('students')->insert([
                // 'id' => $faker->numberBetween(3, 1000),
                'Nama' => $faker->name($gender),
                'Kelas' => $kelas,
                'Jenis_kelamin' => $gender,
                'Alamat' => $faker->address(),
                'Foto' => $image,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
