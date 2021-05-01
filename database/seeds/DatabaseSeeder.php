<?php

use Illuminate\Database\Seeder;
use App\Club;
use App\Event;
use App\Resevent;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClubsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ReseventsTableSeeder::class);
    }
}
