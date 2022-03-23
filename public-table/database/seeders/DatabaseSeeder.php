<?php

namespace Database\Seeders;

use App\Models\CalendarT;
use App\Models\ChainT;
use App\Models\DifferentT;
use App\Models\PublicT;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();         //unused
        PublicT::factory(12)->create();     //must have: const entry's=12
        ChainT::factory(3)->create();
        CalendarT::factory(3)->create();
        DifferentT::factory(3)->create();
    }
}
