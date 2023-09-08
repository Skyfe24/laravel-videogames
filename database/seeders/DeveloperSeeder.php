<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $new_developer = new Developer();
            $new_developer->name = $faker->word();
            $new_developer->surname = $faker->word();
            $new_developer->nationality = $faker->word();
            $new_developer->save();
        }
    }
}
