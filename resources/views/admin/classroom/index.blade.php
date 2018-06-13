@extends('layouts.app')


@section('title')
 <i class="clipboard outline icon" style="font-size: 30px"></i> Salones
@endsection

 @section('slider')
 @include('admin.slidebar')
@endsection

@section('content')
<div class="container"  style="margin-right: 3%;margin-left: 3%">



<table class="ui celled table" id="table" style="margin-bottom: 70px;">
  <thead>
    <tr><th>ID</th>
    <th>Nombre curso</th>
    <th>Salón asignado</th>
    <th class="three wide">Acción</th>
  </tr>
</thead>
 {{ csrf_field() }}
  <tbody>
    @foreach($classroom as $class)
    <tr class="item{{$class->id}}">
      <td>
        {{$class->id}}
      </td>
      <td>{{$class->name}}</td>
      <td>{{$class->description}}</td>
      <td><div class="ui buttons">
  <button style="background-color: #55a9ee" class="ui positive button edit-modal" data-id="{{$class->id}}" data-name="{{$class->name}}" data-description="{{$class->description}}">Editar</button><div class="or" data-text="ó"></div>
  <button class="ui negative button delete-modal" data-id="{{$class->id}}" data-name="{{$class->name}}" data-description="{{$class->description}}">Eliminar</button>
</div></td>
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
     Agregar una nueva aula
    </div>
    <div class="content">
    <form class="ui form" role="form"> 
    <h4 class="ui dividing header">Datos</h4>
   <div class="field">
          <label>Nombre del salon</label>
          <input type="text" class="name_add" id="name_add" autofocus>
        </div>
        <div class="field">
          <label>Aula a asignar</label>
           <input type="text" class="description_add" id="description_add">
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
     Editar este aula
    </div>
    <div class="content">
    <form class="ui form" role="form"> 
    <h4 class="ui dividing header">Datos</h4>
   <div class="field">
          <input type="text" id="id_edit" hidden="true">
          <label>Nombre del salon</label>
          <input type="text" id="name_edit" autofocus>
        </div>
        <div class="field">
          <label>Aula a asignar</label>
           <input type="text" id="description_edit">
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
            Borrar este salon
            </div>
              <div class="content">
                  <form role="form">
                    <input type="text" id="id_delete" hidden="true">
                  </form>
                  <p>Estas seguro de borrar este salon de clases</p>
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
<script type="text/javascript">
   // add a new post
        $('.add-modal').on('click', function() {
            $('#addModal').modal('show');

        });
      $('#btn_add').on('click',function () {
        $.ajax({
            type: 'POST',
                url: 'aulas',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'name': $('#name_add').val(),
                    'description': $('#description_add').val()
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
  text: 'el nuevo salon a sido agragado satisfactoriamente',
  bgcolor: '#19c3aa',
  textcolor: '#fff',
  position: 'top-right', // top And bottom ||  left / center / right
  icon: 'checkmark box',
  time: 3
  });
                        
                          $('#table').append("<tr class='item"+data.id+"'>"+
                                              "<td>"+data.id+"</td>"+
                                              "<td>"+data.name+"</td>"+
                                              "<td>"+data.description+"</td>"+
                                              "<td><div class='ui buttons'>"+
  "<button style='background-color: #55a9ee'  class='ui positive button edit-modal' data-id='"+data.id+"' data-name='"+data.name+"' data-description='"+data.description+"'>Editar</button><div class='or' data-text='ó'></div>"+
  "<button class='ui negative button delete-modal' data-id='"+data.id+"' data-name='"+data.name+"' data-description='"+data.description+"'>Eliminar</button>"+
  "</div></td></tr>");
                    
                    }
                },
            });
        });
       

       $(document).on('click','.edit-modal', function() {
            $('#id_edit').val($(this).data('id'));
             $('#name_edit').val($(this).data('name'));
            $('#description_edit').val($(this).data('description'));
            $('#editModal').modal('show');
           
        });

       $('#btn_edit').on('click',function () {
        $.ajax({
            type: 'POST',
                url: 'aulas/update/'+$('#id_edit').val(),
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id':$('#id_edit').val(),
                    'name': $('#name_edit').val(),
                    'description': $('#description_edit').val()
                },success: function(data) {

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#editModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                       
                    } else {
                    $('#name_edit').val('');
                    $('#description_edit').val('');
                          $.uiAlert({
  textHead: 'Editado Correctamente!!',
  text: 'el salon a sido editado de forma satisfactoria',
  bgcolor: '#55a9ee',
  textcolor: '#fff',
  position: 'top-right', // top And bottom ||  left / center / right
  icon: 'edit',
  time: 3
  });
                          $('.item'+data.id).replaceWith("<tr class='item"+data.id+"'>"+
                                              "<td>"+data.id+"</td>"+
                                              "<td>"+data.name+"</td>"+
                                              "<td>"+data.description+"</td>"+
                                              "<td><div class='ui buttons'>"+
  "<button style='background-color: #55a9ee'  class='ui positive button' data-id='"+data.id+"' data-name='"+data.name+"' data-description='"+data.description+"'>Editar</button><div class='or' data-text='ó'></div>"+
  "<button class='ui negative button' data-id='"+data.id+"' data-name='"+data.name+"' data-description='"+data.description+"'>Eliminar</button>"+
  "</div></td></tr>");
                    
                    }
                },
            });
        });

       $(document).on('click','.delete-modal', function() {
            $('#id_delete').val($(this).data('id'));
            $('#deleteModal').modal('show');
           
           $('#btn_delete').on('click',function() {
            $.ajax({
                type: 'POST',
                url: 'aulas/delete/' + $('#id_delete').val(),
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
$.uiAlert({
  textHead: 'Eliminado Correctamente!!',
  text: 'la materia ha sido eliminada',
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
