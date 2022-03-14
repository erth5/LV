<?php

namespace Database\Seeders;

use App\Models\ChainT;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChainTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=ChainTSeeder
        ChainT::factory(3)->create();
    }
}
