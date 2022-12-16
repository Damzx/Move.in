<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jasa;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    *
    * @return void
    */
   public function run()
   {
      // \App\Models\User::factory(10)->create();

      User::create([
         'fullname' => 'Elyziaaa',
         'username' => 'elyzia',
         'phone' => '0821133242353',
         'address' => 'Jalan Panjaitan',
         'birth_date' => '2022-08-12',
         'password' => bcrypt('elyzia'),
      ]);

      Jasa::create([
         'user_id' => 1,
         'total' => 300000,
         'quantity' => 1,
         'date' => '2022-12-06',
         'jenis' => "Move.In",
      ]);

      Jasa::create([
         'user_id' => 1,
         'total' => 600000,
         'quantity' => 2,
         'date' => '2022-12-03',
         'jenis' => "Packin",
      ]);

      Jasa::create([
         'user_id' => 2,
         'total' => 600000,
         'quantity' => 2,
         'date' => '2022-12-03',
         'jenis' => "Move.In",
      ]);

      Jasa::create([
         'user_id' => 2,
         'total' => 300000,
         'quantity' => 1,
         'date' => '2022-12-06',
         'jenis' => "Packin",
      ]);
   }
}
