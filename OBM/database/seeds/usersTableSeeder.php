<?php

use Illuminate\Database\Seeder;
use App\user;
class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
          'name'=>'Jordi',
          'password'=>'$2y$10$LoGWGlmhuLrs9mBRJ8lvcOG/c4.ok1oT/oMVowAuWCPzzQbPZ/Tcm',
          'email'=>'jordiss9898@gmail.com',
        ]);
    }
}
