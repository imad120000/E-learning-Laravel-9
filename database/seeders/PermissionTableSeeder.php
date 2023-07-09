<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
          'profile',
          'cours',
          'cours-list',
          'cours-categorie',
          'cours-review',
          'cours-enroll',
          'user',
          'user-student',
          'user-profe',
          'controle',
          'controle-user',
          'controle-user-create',
          'controle-user-show',
          'controle-user-edit',
          'controle-user-destroy',
          'controle-roles',
          'controle-role-create',
          'controle-role-show',
          'controle-role-edit',
          'controle-role-destroy',
          'meet',
          'meet-list',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission,'guard_name'=>'admin']);
        }
    }
}