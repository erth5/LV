<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
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

        User::truncate();
        Category::truncate();


         $user = User::factory(10)->create();

         Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

         Category::created([
             'name' => 'Work',
             'slug' => 'work'
         ]);

    }
}
