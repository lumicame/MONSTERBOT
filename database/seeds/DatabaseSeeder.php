<?php
use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(RoleTableSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ActionTableSeeder::class);
        $this->call(MonsterTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(SheduleTableSeeder::class);
           
    }
}
