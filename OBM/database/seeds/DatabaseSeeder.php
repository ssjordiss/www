<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ligasTableSededer::class);
        $this->call(usersTableSeeder::class);
        $this->call(equiposTableSeeder::class);
      //  $this->call(participaTableSeeder::class);
    }
}
