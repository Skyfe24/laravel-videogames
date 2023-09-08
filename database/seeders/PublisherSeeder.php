<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $new_publisher = new Publisher();
            $new_publisher->name = $faker->words(3, true);
            $new_publisher->country = $faker->word();
            $new_publisher->save();
        }
    }
}
