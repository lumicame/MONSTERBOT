@extends('layouts.app')

@section('title')
<h4 id="title_materia" class="header item " style="margin-left:  auto">
 <i class="id badge icon" style="font-size: 30px"></i> Profesores
     </h4>
    
@endsection

 @section('slider')
 @include('admin.slidebar')
@endsection

@section('content')
<div class="container"  style="margin-right: 3%;margin-left: 3%">

<h1  id="tab_count">{{"Numero de profesores: ". $teachers->count()}}</h1>

<table class="ui celled table" id="table" style="margin-bottom: 70px;">
  <thead>
    <tr><th>ID</th>
      <th>NIT</th>
    <th>Nombre</th>
    <th>Correo electronico</th>
    <th class="three wide">Opciones</th>
  </tr>
</thead>
 {{ csrf_field() }}
  <tbody>
    @foreach($teachers as $teacher)
    <tr class="item{{$teacher->id}}">
      <td>
        {{$teacher->id}}
      </td>
      <td>{{$teacher->nit}}</td>
      <td>{{$teacher->name}}</td>
      <td>{{$teacher->email}}</td>
      <td>
  <div class="ui buttons">
  <button style="background-color: #55a9ee" class="ui positive button edit-modal" data-id="{{$teacher->id}}" data-email="{{$teacher->email}}" data-name="{{$teacher->name}}" data-nit="{{$teacher->nit}}" >Editar</button><div class="or" data-text="ó"></div>
    <button class="ui negative button delete-modal" data-id="{{$teacher->id}}">Eliminar</button>

</div>
</td>
    </tr>
    @endforeach
  </tbody>
</table>
<button class="circular ui icon large green fixed button add-modal" id="" style="position: fixed;
    right: 20px;
    bottom: 50px;">
  <i class="icon plus"></i>
</button>

<div class="ui modal tiny" id="addModal">
    <div class="header">
     Agregar Profesor
    </div>
    <div class="content">
    <form class="ui form" role="form"> 
   <div class="field">
          <label>C.C</label>
          <input type="number" class="nit_add" id="nit_add" autofocus>
        </div>
   <div class="field">
          <label>Nombre del Profesor</label>
          <input type="text" class="name_add" id="name_add" autofocus>
        </div>
        <div class="field">
          <label>Correo electronico</label>
          <input type="email" class="email_add" id="email_add" autofocus>
        </div>
        <div class="field">
          <label>Contraseña</label>
          <input type="password" class="pass_add" id="pass_add" autofocus>
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
     Editar este Profesor
    </div>
    <div class="content">
    <form class="ui form" role="form"> 
    <div class="field">
          <label>C.C del profesor</label>
          <input type="text" id="nit_edit" autofocus >
        </div>
   <div class="field">
          <input type="text" id="id_edit" hidden="true">
          <label>Nombre del Profesor</label>
          <input type="text" id="name_edit" autofocus>
        </div>
        <div class="field">
          <label>Correo electronico del Profesor</label>
          <input type="text" id="email_edit" autofocus >
        </div>
           </form>
           </div>
    <div class="actions">
      <div class="ui negative button">
        Cancelar
      </div>
      <div class="ui positive right labeled icon button add" id="btn_edit">
        Editar
        <i class="checkmark icon"></i>
      </div>
    </div>
  </div>

    <div class="ui mini modal" id="deleteModal">
            <div class="header">
            Borrar este Profesor
            </div>
              <div class="content">
                  <form role="form">
                    <input type="text" id="id_delete" hidden="true">
                  </form>
                  <p>Estas seguro de borrar a este Profesor</p>
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

 <script type="text/javascript">
// agregar una materia
        $('.add-modal').on('click', function() {
            $('#addModal').modal('show');

        });
        $('#btn_add').on('click',function () {
        $.ajax({
            type: 'POST',
                url: 'teacher',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'name': $('#name_add').val(),
                    'nit':$('#nit_add').val(),
                    'email':$('#email_add').val(),
                    'password':$('#pass_add').val()
                },success: function(data) {

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                       
                    } else {
                    $('#name_add').val('');
                    $('#description_add').val('');
                    $.uiAlert({
                                textHead: 'Agregado Correctamente!!',
                                text: 'El profesor a sido agregado',
                                bgcolor: '#19c3aa',
                                textcolor: '#fff',
                                position: 'top-right', // top And bottom ||  left / center / right
                                icon: 'checkmark box',
                                time: 3
                                });
                        
                                                $('#tab_count').text("Numero de Profesores: "+ data.teachercount);

                        $('#table').append('<tr class="item'+data.id+'"><td>'+data.id+'</td>'+
                                          '<td>'+data.nit+'</td>'+
                                          '<td>'+data.name+'</td>'+
                                           '<td>'+data.email+'</td>'+
                                          '<td> <div class="ui buttons">'+
                                          '<button style="background-color: #55a9ee" class="ui positive button edit-modal" data-id="'+data.id+'" data-name="'+data.name+'" data-nit="'+data.nit+'" >Editar</button><div class="or" data-text="ó"></div>'+
                                                                                  '<button class="ui negative button delete-modal" data-id="'+data.id+'">Eliminar</button></div></td></tr>');
                                            
                          
                                                                
                                                                }
                },
            });
        });

//editar un estudiante
       $(document).on('click','.edit-modal', function() {
            $('#id_edit').val($(this).data('id'));
             $('#name_edit').val($(this).data('name'));
            $('#nit_edit').val($(this).data('nit'));
            $('#email_edit').val($(this).data('email'));
            
            $('#editModal').modal('show');
           
        });

       $('#btn_edit').on('click',function () {
        $.ajax({
            type: 'POST',
                url: 'user/update/'+$('#id_edit').val(),
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id':$('#id_edit').val(),
                    'name': $('#name_edit').val(),
                    'nit': $('#nit_edit').val(),
                    'email':$('#email_edit').val()
                },success: function(data) {

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#editModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                       
                    } else {
                    $('#name_edit').val('');
                    $('#nit_edit').val('');
                    $('#email_edit').val('');

                              $.uiAlert({
                              textHead: 'Editado Correctamente!! ',
                              text: 'el estudiante a sido editado',
                              bgcolor: '#55a9ee',
                              textcolor: '#fff',
                              position: 'top-right', // top And bottom ||  left / center / right
                              icon: 'edit',
                              time: 3
                              });
                          $('.item'+data.id).replaceWith('<tr class="item'+data.id+'"><td>'+data.id+'</td>'+
                                          '<td>'+data.nit+'</td>'+
                                          '<td>'+data.name+'</td>'+
                                           '<td>'+data.email+'</td>'+
                                          '<td> <div class="ui buttons">'+
                                          '<button style="background-color: #55a9ee" class="ui positive button edit-modal" data-id="'+data.id+'" data-name="'+data.name+'" data-nit="'+data.nit+'" >Editar</button><div class="or" data-text="ó"></div>'+
                                                                                  '<button class="ui negative button delete-modal" data-id="'+data.id+'">Eliminar</button></div></td></tr>');
                    
                    }
                },
            });
        });    

//Eliminar una materia
       $(document).on('click','.delete-modal', function() {
            $('#id_delete').val($(this).data('id'));
            $('#deleteModal').modal('show');
           
           $('#btn_delete').on('click',function() {
            $.ajax({
                type: 'POST',
                url: 'user/delete/' + $('#id_delete').val(),
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
          $.uiAlert({
            textHead: 'Eliminado Correctamente!!',
            text: 'la materia a sido Eliminada',
            bgcolor: '#DB2828',
            textcolor: '#fff',
            position: 'top-right', // top And bottom ||  left / center / right
            icon: 'trash',
            time: 3
            });
                    $('.item' + data.id).remove();
                }
            });
        });
        });
    </script>
@endsection
