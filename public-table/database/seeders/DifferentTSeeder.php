<?php

namespace Database\Seeders;

use App\Models\DifferentT;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DifferentTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=DifferentTSeeder
        DifferentT::factory(3)->create();
    }
}
