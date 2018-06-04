<?php

use Illuminate\Database\Seeder;
use App\ligaprincipal;
class ligasTableSededer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ligaprincipal::create([
          'nombre'=>'NBA',
        ]);
    }
}
