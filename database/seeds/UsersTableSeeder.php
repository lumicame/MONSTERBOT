<?php

use App\User;
use App\Shedule;
use App\Role;
use App\Classroom;
use App\Monster;
use App\Profile;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	$role_student = Role::where('name', 'student')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_parent=Role::where('name','parent')->first();
        $role_teacher=Role::where('name','teacher')->first();

        $primeroA=Classroom::where('name','Primero A')->first();
        $primeroB=Classroom::where('name','Primero B')->first();
        $segundoA=Classroom::where('name','Segundo A')->first();
        $segundoB=Classroom::where('name','Segundo B')->first();
            
        $user =new User();
        $user->nit = str_random(10);
        $user->name = 'Administrator';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);

        $user =new User();
        $user->nit = str_random(10);
        $user->name = 'Proffesor';
        $user->email = 'teacher@teacher.com';
        $user->password = bcrypt('teacher');
        $user->save();
        $user->roles()->attach($role_teacher);

        $user =new User();
        $user->nit = str_random(10);
        $user->name = 'Parents';
        $user->email = 'parent@parent.com';
        $user->password = bcrypt('parent');
        $user->save();
        $user->roles()->attach($role_parent);
        
        for ($i=0; $i < 10; $i++) { 
            $profile=new Profile();
            $profile->name=$faker->name;
            $profile->description=$faker->paragraph;
            $profile->img_monster=$faker->paragraph;
        $user =new User();
        $user->nit = str_random(10);
        $user->name = $faker->name;
        $user->email = $faker->unique()->safeEmail;
        $user->password = bcrypt('student');
        $user->save();
        $user->roles()->attach($role_student);
        $user->classroom()->attach($primeroA);
        $user->profile()->save($profile);
        }

        for ($i=0; $i < 10; $i++) { 

            $profile=new Profile();
            $profile->name=$faker->name;
            $profile->description=$faker->paragraph;
            $profile->img_monster=$faker->paragraph;
        $user =new User();
        $user->nit = str_random(10);
        $user->name = $faker->name;
        $user->email = $faker->unique()->safeEmail;
        $user->password = bcrypt('student');
        $user->save();
        $user->roles()->attach($role_student);
        $user->classroom()->attach($primeroB);   
                $user->profile()->save($profile);

        }

        for ($i=0; $i < 10; $i++) { 

            $profile=new Profile();
            $profile->name=$faker->name;
            $profile->description=$faker->paragraph;
            $profile->img_monster=$faker->paragraph;
        $user =new User();
        $user->nit =str_random(10);
        $user->name = $faker->name;
        $user->email = $faker->unique()->safeEmail;
        $user->password = bcrypt('student');
        $user->save();
        $user->roles()->attach($role_student);
        $user->classroom()->attach($segundoA);
                $user->profile()->save($profile);

       /* $monster = new Monster();
        $monster->name = $user->username;
        $monster->description = 'Monster cariñositp de'. $user->name;
        $monster->accion="0";
        $monster->user_id=$user->id;
        $monster->save();
        $user->monster()->attach($monster);*/
        }
        
    }
}
