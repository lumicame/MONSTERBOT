<?php

use App\Shedule;
use Illuminate\Database\Seeder;

class SheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classroom=App\Classroom::find(1);
        $subject=App\Subject::find(1);
        $user=App\User::find(2);
        $date1=new App\Date();
        $date1->inicio = '7 am';
        $date1->fin='8 am';
        $date1->dia='Martes';
        $date1->save();
        
        $date2=new App\Date();
        $date2->inicio = '8 am';
        $date2->fin='9 am';
        $date2->dia='Miercoles';
        $date2->save();
        
        $shedule = new Shedule();
        $shedule->nit=str_random(10);   
        $shedule->save();
        $classroom->shedules()->attach($shedule);
        $shedule->user()->attach($user);
        $shedule->subject()->attach($subject);
        $shedule->dates()->attach($date1);
        $shedule->dates()->attach($date2);
    }
}
