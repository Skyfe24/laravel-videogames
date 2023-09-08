<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publishers = config('publishers_list');
        for ($i = 0; $i < count($publishers); $i++) {

            $new_publisher = new Publisher();
            $new_publisher->name = $publishers[$i]['name'];
            $new_publisher->country = $publishers[$i]['country'];
            $new_publisher->save();
        }
    }
}
