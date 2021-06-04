<?php
use App\Resevent;
use Illuminate\Database\Seeder;

class ReseventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Resevent::class, 10)->create();
        
    }
}
