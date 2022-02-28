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
        // only DatabaseSeeders works
        ChainT::factory(3)->create();
    }
}
