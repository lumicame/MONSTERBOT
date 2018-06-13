<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		$subject = new Subject();
        $subject->name = 'Matematicas';
        $subject->nit=str_random(10);
        $subject->save();

        $subject = new Subject();
        $subject->name = 'Lenguaje';
        $subject->nit=str_random(10);
        $subject->save();

        $subject = new Subject();
        $subject->name = 'Naturales';
        $subject->nit=str_random(10);
        $subject->save();

            }
}
