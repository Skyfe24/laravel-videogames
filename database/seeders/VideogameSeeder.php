<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Videogame;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $genres = Genre::all();
        $videogames_list = config('videogames_list');
        for ($i = 0; $i < count($videogames_list); $i++) {

            $new_videogame = new Videogame();
            $new_videogame->title = $videogames_list[$i]['title'];
            $new_videogame->release_date = $videogames_list[$i]['release_date'];
            $new_videogame->cover = $faker->imageUrl(640, 480, 'animals', true);
            $new_videogame->description = $faker->paragraph();
            $new_videogame->serial_number = $faker->isbn13();
            $new_videogame->rating = $faker->numberBetween(1, 5);
            $new_videogame->save();
            $new_videogame->genres()->attach(Arr::random($genres->pluck('id')->toArray()));
        }
    }
}
