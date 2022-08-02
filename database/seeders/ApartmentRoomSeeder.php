<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Apartment;
class ApartmentRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('apartment_rooms')->insert([

                // 'name' => $faker->text(10),
                'apartment_id' => Apartment::All()->random()->id,
                'room_bumber' => $faker->randomNumber(),
                'defaul_price' => 3000,
                'max_tenant' => 5,
            ]);
        }
    }
}
