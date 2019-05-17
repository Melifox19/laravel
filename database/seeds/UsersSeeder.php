<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    User::insert([
      'name' => 'Admin',
      'email' => 'projet.melifox@gmail.com',
      'role' => 'admin',
      'email_verified_at' => '2019-01-01 00:00:00',
      'password' => '$2y$10$2Dx.Vp0usAG.bbHa3WJDaemC8pGHdcIg.N0YcAyQ0ashM6uNov0jW',
      'created_at' => '2019-01-01 00:00:00',
      'updated_at' => '2019-01-01 00:00:00',
    ]);

    User::insert([
      'name' => 'Api',
      'email' => 'api@melifox.com',
      'role' => 'admin',
      'email_verified_at' => '2019-01-01 00:00:00',
      'password' => '$2y$10$2Dx.Vp0usAG.bbHa3WJDaemC8pGHdcIg.N0YcAyQ0ashM6uNov0jW',
      'created_at' => '2019-01-01 00:00:00',
      'updated_at' => '2019-01-01 00:00:00',
    ]);

    User::insert([
      'name' => 'Toto',
      'email' => 'toto@gmail.com',
      'role' => 'user',
      'email_verified_at' => '2019-01-01 00:00:00',
      'password' => '$2y$10$i2K.pw9nktjyFntLSa3CbutW/bTWe9Az2rtYOscZlRfgug9OFf.yq',
      'remember_token' => '2019-01-01 00:00:00',
      'created_at' => '2019-01-01 00:00:00',
      'updated_at' => '2019-01-01 00:00:00',
    ]);

    User::insert([
      'name' => 'Tata',
      'email' => 'tata@gmail.com',
      'role' => 'user',
      'email_verified_at' => '2019-01-01 00:00:00',
      'password' => '$2y$10$i2K.pw9nktjyFntLSa3CbutW/bTWe9Az2rtYOscZlRfgug9OFf.yq',
      'created_at' => '2019-01-01 00:00:00',
      'updated_at' => '2019-01-01 00:00:00',
    ]);
  }
}
