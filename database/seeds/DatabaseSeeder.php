<?php


use Illuminate\Database\Seeder;
use App\Club;
use App\Event;
use App\Resevent;

<<<<<<< HEAD
  
=======

>>>>>>> 3512d717d28247febbf24c8d20f0c205379710e4
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(ClubsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ReseventsTableSeeder::class);
=======
       // $this->call(UsersTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(AdhrentsTableSeeder::class);
>>>>>>> 3512d717d28247febbf24c8d20f0c205379710e4
    }
}
