<?php

use Illuminate\Database\Seeder;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory('App\blog',5)->create();
    }
}
