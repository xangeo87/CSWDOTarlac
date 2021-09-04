<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20) as $index){
            DB::table('client_files')->insert([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'middle_name' => $faker->lastName(),
                // suffix
                // civil_status
                'date_of_birth' => $faker->date(),
                // place_of_birth
                // educational_attainment
                'occupation' => $faker->jobTitle(),
                'income' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 3000),
                'home_address' => $faker->address(),
                // barangay
                'name_of_hospital' => $faker->word(),
                'date_of_admission' => $faker->date(),
                'date_of_discharge' => $faker->date(),
                'name_of_attending_md' => $faker->name(),
                'diagnosis' => $faker->word(),
                'narrative' => $faker->paragraph(4),
                'problem_presented_1' => $faker->sentence(2),
                // problem_presented_2
                'recommendation' => $faker->word(),
                'slug' => $faker->word(1),
                'image' => $faker->word(1)
            ]);
        }

        // foreach(range(1,50) as $index){
        //     DB::table('family_members')->insert([
        //         'first_name' => $faker->firstName(),
        //         'last_name' => $faker->lastName(),
        //         'middle_name' => $faker->lastName(),
        //         // age
        //         // educational_attainment
        //         'occupation' => $faker->jobTitle(),
        //         'income' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 3000),
        //     ]);
        // }
    }
}
