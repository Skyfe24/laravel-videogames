<?php

namespace Database\Seeders;

use App\Models\Console;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $ninth_gen = config('ninth_gen_console');
        $eighth_gen = config('eighth_gen_console');
        for ($i = 0; $i < count($ninth_gen); $i++) {
            $new_console = new Console();
            $new_console->producer = $ninth_gen[$i]['producer'];
            $new_console->name = $ninth_gen[$i]['name'];
            $new_console->release_date = $ninth_gen[$i]['release_date'];
            $new_console->generation = '9th Gen';
            $new_console->OS = $faker->word();
            $new_console->save();
        }
        for ($i = 0; $i < count($eighth_gen); $i++) {
            $new_console = new Console();
            $new_console->producer = $eighth_gen[$i]['producer'];
            $new_console->name = $eighth_gen[$i]['name'];
            $new_console->release_date = $eighth_gen[$i]['release_date'];
            $new_console->generation = '8th Gen';
            $new_console->OS = $faker->word();
            $new_console->save();
        }
    }
}
