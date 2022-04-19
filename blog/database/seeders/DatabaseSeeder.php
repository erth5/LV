<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // RelationShip Daten
        User::factory(10)
        ->has(Post::factory()->count(2))
        ->create();
        
/*         Diese Richtung nicht möglich
        Post::factory(10)
        ->belongsTo(User::factory()->count(10))
        ->create(); */
    }
}
