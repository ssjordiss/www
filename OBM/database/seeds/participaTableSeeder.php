<?php

use Illuminate\Database\Seeder;
use App\participa;
class participaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        participa::create([
          'id_usuario'=>1,
          'id_liga'=>1.
        ]);
    }
}
