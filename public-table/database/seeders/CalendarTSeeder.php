<?php

namespace Database\Seeders;

use App\Models\CalendarT;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalendarTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=CalendarTSeeder
        CalendarT::factory(3)->create();
    }
}
