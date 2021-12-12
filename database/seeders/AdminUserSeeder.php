<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Enums\TipoServicioEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $user = User::create([
      'name' => 'Administrador',
      'email' => 'reinaldo@takeit.dev',
      'password' => bcrypt('qweqwe'),
    ]);

    $user->assignRole([1]); 

    $user = User::create([
      'name' => 'Prueba',
      'email' => 'prueba@takeit.dev',
      'password' => bcrypt('qweqwe'),
    ]);

    $user->assignRole([2]);
  }
}
