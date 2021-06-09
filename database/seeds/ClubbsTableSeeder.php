<?php

use Illuminate\Database\Seeder;
use App\Club;
class ClubbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Club::class, 10)->create();
    }
}
