<?php

namespace Database\Seeders;

use App\Models\PublicT;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublicTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=PublicTSeeder
        PublicT::factory(3)->create();
    }
}
