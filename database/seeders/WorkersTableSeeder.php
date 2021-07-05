<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Role::truncate();
        Worker::truncate();

        // ROLES
        $adminRole = Role::create(['name' => 'Administrador', 'guard_name' => 'workers']);
        $salesmanRole = Role::create(['name' => 'Vendedor', 'guard_name' => 'workers']);

        // PERMISOS
        $viewWorkersPermission = Permission::create(['name' => 'Ver Lista de Usuarios', 'guard_name' => 'workers']);
        $createWorkersPermission = Permission::create(['name' => 'Registrar Usuarios', 'guard_name' => 'workers']);
        $updateWorkersPermission = Permission::create(['name' => 'Modificar Usuarios', 'guard_name' => 'workers']);
        $deleteWorkersPermission = Permission::create(['name' => 'Eliminar Usuarios', 'guard_name' => 'workers']);

        // ASIGNAR PERMISOS A ROLES
        $adminRole->givePermissionTo([
            $viewWorkersPermission,
            $createWorkersPermission,
            $updateWorkersPermission,
            $deleteWorkersPermission
        ]);

        // USUARIOS
        $admin = new Worker;
        $admin->name = 'Workername';
        $admin->surname = 'WorkerSurname';
        $admin->dni = '77777777';
        $admin->state = 'Activo';
        $admin->email = 'user01@gmail.com';
        $admin->password = 'userpassword01';
        $admin->save();

        $admin->syncRoles($adminRole);

        $salesman = new Worker;
        $salesman->name = 'Workername2';
        $salesman->surname = 'WorkerSurname2';
        $salesman->dni = '78888888';
        $salesman->state = 'Deshabilitado';
        $salesman->email = 'user02@gmail.com';
        $salesman->password = 'userpassword02';
        $salesman->save();

        $salesman->syncRoles($salesmanRole);
    }
}
