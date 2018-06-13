<?php

use App\Monster;
use Illuminate\Database\Seeder;

class MonsterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moster = new Monster();
        $moster->nit=str_random(10);
        $moster->name = 'Predator';
        $moster->description = 'Monster de tres cabezas que lanza llamas';
        $moster->accion="0";
        $moster->save();

        $moster = new Monster();
        $moster->nit=str_random(10);
        $moster->name = 'Depredador';
        $moster->description = 'Monster Depredador';
        $moster->accion="0";
        $moster->save();

        $moster = new Monster();
        $moster->nit=str_random(10);
        $moster->name = 'Cariñosito';
        $moster->description = 'Monster cariñoso';
        $moster->accion="0";
        $moster->save();
    }
}
