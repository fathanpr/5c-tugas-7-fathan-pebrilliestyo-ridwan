<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ukf;
use App\Models\Mahasiswa;
use App\Models\UkfFasilkom;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('id_ID');
       $faker->seed(123);
        $prodi =["Informatika","Sistem Informasi"];
       for ($i=0; $i < 10; $i++) { 
        Mahasiswa::create([
            'npm' => $faker->unique()->numerify('20##########'),
            'nama' => $faker->firstName.' '.$faker->lastName,
            'umur' =>$faker->numberBetween(19,24),
            'prodi'=>$faker->randomElement($prodi)
        ]);
       }
       Ukf::create([
        'nama_ukf' => 'UKF Musik (Fakustik)'
       ]);
       Ukf::create([
        'nama_ukf' => 'UKF Futsal (Fakutsal)'
       ]);
       Ukf::create([
        'nama_ukf' => 'UKF Seni dan Sastra (Fakustra)'
       ]);

       UkfFasilkom::create([
        'mahasiswa_id' => '1',
        'ukf_id' =>'2'
       ]);
       UkfFasilkom::create([
        'mahasiswa_id' => '1',
        'ukf_id' =>'3'
       ]);
       UkfFasilkom::create([
        'mahasiswa_id' => '1',
        'ukf_id' =>'1'
       ]);

    }
}
