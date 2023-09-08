<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\Console;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $new_console = new Console();
            $new_console->producer = $faker->word();
            $new_console->name = $faker->word();
            $new_console->release_date = $faker->dateTime();
            $new_console->generation = '2nd Gen';
            $new_console->OS = $faker->word();
            $new_console->save();
        }
    }
}
