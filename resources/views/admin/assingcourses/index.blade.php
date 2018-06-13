@extends('layouts.app')

@section('addscript')
@endsection
@section('title')
<h4 id="title_materia" class="header item " style="margin-left:  auto">
 <i class="tasks icon" style="font-size: 30px"></i> Asignar Cursos
     </h4>
    
@endsection

 @section('slider')
 @include('admin.slidebar')
@endsection

@section('content')
<div class="container"  style="margin-right: 3%;margin-left: 3%">



<div class="ui grid">
  <div class="three wide column">
    <div class="ui vertical fluid tabular menu">
      @foreach($classrooms as $classroom)
      <a class="item" data-tab="{{$classroom->id}}">
        {{$classroom->name." - ".$classroom->description}}
      </a>
      @endforeach
    </div>
  </div>

  <div class="thirteen wide column" style="background: #f5f5f3" >
      @foreach($classrooms as $classroom)
    <div class="ui bottom attached tab segment" data-tab="{{$classroom->id}}" style="background: #f5f5f3;border: none;">
      <div class="ui segment" >
  <center><h3>Horario de calses</h3></center>
  <table class="ui table" id="contenedor{{$classroom->id}}">
  <thead>
    <tr>
      <th>Nit</th>
      <th>Materia</th>
      <th>Profesor</th>
      <th>Horario</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($classroom->shedules as $shedule)
    <tr class="item{{$shedule->id}}">
      <td>{{$shedule->nit}}</td>
      <td>{{$shedule->subject()->first()->name}}</td>
      <td>{{$shedule->user()->first()->name}}</td>
      <td class="td">
          @foreach($shedule->dates as $date)
        {{$date->dia." ".$date->inicio." - ".$date->fin}}
        <br>  
          @endforeach
        </td>
      
  <td><div class="ui buttons">
  <button class="ui positive button edit-modal" data-id="{{$shedule->id}}">Agregar Hora</button><div class="or" data-text="ó"></div>
  <button class="ui negative button delete-modal" data-id="{{$shedule->id}}" >Eliminar</button>
</div></td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
<button class="circular ui icon large green fixed button add-modal" data-id="{{$classroom->id}}" data-name="{{$classroom->name.' - '.$classroom->description}}" id="" style="position: fixed;
    right: 20px;
    bottom: 50px;">
  <i class="icon plus"></i>
</button>
    </div>

    @endforeach
  </div>
</div>


<div class="ui modal tiny" id="addModal">
    <div class="header">
     Agregar Clase a este curso
    </div>
    <div class="content">
    <form class="ui form" role="form"> 

   <div class="field" >
              <label>Materia</label>
              <?php
                $subjects=App\Subject::all();
               ?>
    <select class="ui dropdown" class="subject_add" id="subject_add" autofocus>
    <option value="">Selecciona una materia</option>
    @foreach($subjects as $subject)
    <option value="{{$subject->id}}">{{$subject->name}}</option>
    @endforeach
    </select>
          
        </div>
    <div class="field">
          <label>Profesor</label>
          <?php
          $roles=App\Role::find(2);
        
               ?>
      <select class="ui dropdown" class="user_add" id="user_add" autofocus>
    <option value="">Selecciona un profesor</option>
    @foreach($roles->users as $teacher)
    <option value="{{$teacher->id}}">{{$teacher->name." - ".$teacher->nit}}</option>
    @endforeach
    </select>
        </div>
        <div class="field disabled">

          <input type="hidden" class="classroom_add" id="classroom_add">
          <label>Curso</label>
          <input type="text" id="text_class_add" autofocus>
        </div>

          <div class="field">
            <select class="ui dropdown" class="day_add" id="day_add" autofocus>
            <option value="">Selecciona un dia</option>
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sabado">Sabado</option>
            
          </select>
          </div>
          <div class="two fields">
            <div class="field">
          <input type="text" class="inicio_add" id="inicio_add" placeholder="Hora de inicio (ejm: 7:45)" autofocus>
          </div>
           <div class="field">
               <select class="ui dropdown" class="inicio_time_add" id="inicio_time_add" autofocus>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
          </select>
           </div>
          </div>
          <div class="two fields">
            <div class="field">
          <input type="text" class="fin_add" id="fin_add" placeholder="Hora de fin (ejm: 7:45)" autofocus>
          </div>
          <div class="field">
               <select class="ui dropdown" class="fin_time_add" id="fin_time_add" autofocus>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
          </select>
           </div>
          </div>
         
           </form>
           </div>
    <div class="actions">
      <div class="ui negative button">
        Cancelar
      </div>
      <div class="ui positive right labeled icon button add" id="btn_add">
        Agregar
        <i class="checkmark icon"></i>
      </div>
    </div>
  </div>

  <div class="ui modal tiny" id="editModal">
    <div class="header">
     Agregar Horario
    </div>
    <div class="content">
    <form class="ui form" role="form">
    <input type="hidden" id="id_edit"> 
     <div class="field">
            <select class="ui dropdown" class="day_edit" id="day_edit" autofocus>
            <option value="">Selecciona un dia</option>
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miercoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sabado">Sabado</option>
            
          </select>
          </div>
          <div class="two fields">
            <div class="field">
          <input type="text" class="inicio_edit" id="inicio_edit" placeholder="Hora de inicio (ejm: 7:45)" autofocus>
          </div>
           <div class="field">
               <select class="ui dropdown" class="inicio_time_edit" id="inicio_time_edit" autofocus>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
          </select>
           </div>
          </div>
          <div class="two fields">
            <div class="field">
          <input type="text" class="fin_edit" id="fin_edit" placeholder="Hora de fin (ejm: 7:45)" autofocus>
          </div>
          <div class="field">
               <select class="ui dropdown" class="fin_time_edit" id="fin_time_edit" autofocus>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
          </select>
           </div>
          </div>
           </form>
           </div>
    <div class="actions">
      <div class="ui negative button">
        Cancelar
      </div>
      <div class="ui positive right labeled icon button add" id="btn_edit">
        Agregar Horario
        <i class="checkmark icon"></i>
      </div>
    </div>
  </div>

    <div class="ui mini modal" id="delete_Modal">
            <div class="header">
            Borrar este Estudiante
            </div>
              <div class="content">
                  <form role="form">

                    <input type="hidden" id="id_contenedor" >
                  
                    <input type="hidden" id="id_delete">
                  </form>
                  <p>Estas seguro de borrar a este Estudiante</p>
              </div>
              <div class="actions">
                  <div class="ui negative button">
                    No
                  </div>
                  <div class="ui positive right labeled icon button" id="btn_delete">
                   Si
                  <i class="checkmark icon"></i>
                 </div>
              </div>
    </div>
</div>
<meta name="_token" content="{{ csrf_token() }}"/>
<script type="text/javascript" src="{{asset('js/shedule.js')}}"></script>

<script type="text/javascript">

/*
// agregar una materia
        
       

*/
    </script>
 
@endsection