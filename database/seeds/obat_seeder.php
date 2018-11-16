<?php

use Illuminate\Database\Seeder;

class obat_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 20; //limit berapa banyak data

        for($i = 0; $i < $limit; $i++){
        	DB::table('obats')->insert([//mengisi data di database
        		'nama_obat' => $faker->name,
        		'harga' => $faker->numberBetween(1000,9000000),
        		'stok' => $faker->numberBetween(0,10000),
        		'expired_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        		'production_date' => $faker->date($format = 'Y-m-d', $max = 'now')
        }
    }
}
