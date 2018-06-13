<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'teacher';
        $role->description = 'Profesor';
        $role->save();

        $role = new Role();
        $role->name = 'parent';
        $role->description = 'Padre';
        $role->save();

        $role = new Role();
        $role->name = 'student';
        $role->description = 'Estudiante';
        $role->save();
    }
}
