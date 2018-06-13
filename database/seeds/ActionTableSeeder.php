<?php

use App\Action;
use Illuminate\Database\Seeder;

class ActionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$action = new Action();
        $action->name = 'Desactivar';
        $action->description = 'Se han desactivado todos los Monsterbots';
        $action->accion="0";
        $action->color="#000000";
        $action->textcolor="#FFFFFF";
        $action->save();

        $action = new Action();
        $action->name = 'Baño';
        $action->description = 'Se a activado la funcion de dar permiso para ir al baño al estudiante: ';
        $action->accion="1";
        $action->color="#FFFFFF";
        $action->textcolor="#000000";
        $action->save();

        $action = new Action();
        $action->name = 'Rojo';
        $action->description = 'Se ha ensendido led de color rojo';
        $action->accion="2";
        $action->color="#EC1010";
        $action->textcolor="#FFFFFF";
        $action->save();

        $action = new Action();
        $action->name = 'Verde';
        $action->description = 'Se ha ensendido led de color verde';
        $action->accion="3";
        $action->color="#16C31E";
        $action->textcolor="#FFFFFF";
        $action->save();

        $action = new Action();
        $action->name = 'Azul';
        $action->description = 'Se ha ensendido led de color azul';
        $action->accion="4";
        $action->color="#0D42F5";
        $action->textcolor="#FFFFFF";
        $action->save();
    }
}
