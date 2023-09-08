<?php

namespace Database\Seeders;
use App\Models\Genre;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Action',
            'Adventure',
            'Role-playing',
            'Simulation',
            'Strategy',
            'Puzzle',
            'Arcade',
            'Fighting',
            'First-Person Shooter',
            'Third-Person Shooter',
            'Sports',
            'Racing',
            'Survival Horror',
            'Sandbox',
            'Real-time Strategy',
            'Turn-based Strategy',
            'Card Game',
            'Battle Royale',
            'MMO',
            'MOBA',
            'Open World',
            'Stealth',
            'Platformer',
            'Visual Novel',
            'Roguelike',
            'Roguelite',
            'Metroidvania',
            'Horror',
            'VR (Virtual Reality)',
        ];

        foreach ($genres as $genre) {
            $new_genre = new Genre();
            $new_genre->name = $genre;
            $new_genre->save();
        }
        
    }
}
