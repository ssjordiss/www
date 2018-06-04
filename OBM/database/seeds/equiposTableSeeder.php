<?php

use Illuminate\Database\Seeder;
use App\equipoprincipal;
class equiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        equipoprincipal::create([
          'nombre'=>'Miami Heat',
          'cuenta'=>131397624,
          'id_liga'=>1,
        ]);
        equipoprincipal::create([
          'nombre'=>'Washington Wizards',
          'cuenta'=>124613393,
          'id_liga'=>1,
        ]);

    }
}
