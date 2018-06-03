<?php

use Illuminate\Database\Seeder;
use App\equipo;
class equiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        equipo::create([
          'nombre'=>'Miami Heat',
          'cuenta'=>131397624,
          'id_liga'=>1,
          'id_usuario'=>1,
        ]);
        equipo::create([
          'nombre'=>'Washington Wizards',
          'cuenta'=>124613393,
          'id_liga'=>1,
        ]);

    }
}
