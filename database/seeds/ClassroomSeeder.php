<?php

use App\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $classroom = new Classroom();
        $classroom->name = 'Primero A';
        $classroom->description = 'Aula 101';
        $classroom->save();

         $classroom = new Classroom();
        $classroom->name = 'Primero B';
        $classroom->description = 'Aula 102';
        $classroom->save();

        $classroom = new Classroom();
        $classroom->name = 'Segundo A';
        $classroom->description = 'Aula 103';
        $classroom->save();

         $classroom = new Classroom();
        $classroom->name = 'Segundo B';
        $classroom->description = 'Aula 104';
        $classroom->save();
    }
}
