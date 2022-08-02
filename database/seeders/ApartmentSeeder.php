<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class ApartmentSeeder extends Seeder
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
            DB::table('apartments')->insert([

                'name' => $faker->text(10),
                'address' => $faker->text(10),
                // 'image' => $faker->image(),
                'province' => $faker->text(10),
                 'district' => $faker->text(10),
                  'ward' => $faker->text(10),
                  'user_id' => User::All()->random()->id,
            ]);
        }
    }
}
