<?php

use Illuminate\Database\Seeder;
use App\liga;
class ligasTableSededer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        liga::create([
          'nombre'=>'NBA',
        ]);
    }
}
