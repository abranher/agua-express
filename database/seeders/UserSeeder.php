<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    $User = User::create([
      "name" => "Abraham Hernández",
      "email" => "abran@gmail.com",
      "username" => "abranher",
      "password" => bcrypt("Abran123."),
    ])->assignRole(Role::ADMIN);
  }
}
