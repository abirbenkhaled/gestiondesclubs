<?php
use App\Adhrent;
use Illuminate\Database\Seeder;

class AdhrentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Adhrent::class, 20)->create();
    }
}
