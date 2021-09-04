<?php

namespace Database\Seeders;

use Database\Factories\FamilyMemberFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     ClientFileSeeder::class,
        // ]);

        \App\Models\FamilyMember::factory(50)->create();
    }
}
