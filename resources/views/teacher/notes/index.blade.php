@extends('layouts.app')


@section('slider')

@include('teacher.slidebar')
@endsection
@section('content')
      
       
              

<div class="container" style="margin-right: 3%;margin-left: 3%">
   <div class="ui five doubling cards">
{{ csrf_field() }}
  @foreach($students as $student)

      @include('recursos.card')
     

       @endforeach

   </div>
    <div id="openModal" class="ui modal">
  <div class="header" ><span class="username" id="username"></span></div> 
  <div class="content">
    <p>Este es el modal del alumno <span class="name" id="name"></span></p>
    <form><input type="text" id="id" hidden="true">
    </form>
     <div class="ui buttons">
     @foreach($actions as $action)
  <button class="ui button btn_accion" style="background-color: {{$action->color}};color:{{$action->textcolor}} "  data-id="{{$action->id}}" data-name="{{$action->name}}" data-color="{{$action->color}}" data-textcolor="{{$action->textcolor}}" data-description="{{$action->description}}" data-action="{{$action->accion}}">{{$action->name}}</button>
@endforeach
</div>
  </div>
</div>
</div>
<meta name="_token" content="{{ csrf_token() }}"/>
@include('recursos.footer')
@endsection

@section('script')
<script type="text/javascript">
 $( function() {
    $( ".draggable" ).draggable();
  } );

  var database = firebase.database();
  $('.open-modal').on('click', function() {
            $('#id').val($(this).data('id'));
            $('#username').text($(this).data('username'));
            $('#name').text($(this).data('name'));
            $('#openModal').modal('show');
        });

  $(document).on('click','.btn_accion',function () {

    firebase.database().ref('monster/' + $('#id').val()).set({
    accion: $(this).data('action')
  });


$.uiAlert({
                                          textHead: 'Led '+ $(this).data('name'),
                                          text: $(this).data('description'),
                                          bgcolor: $(this).data('color'),
                                          textcolor: $(this).data('textcolor'),
                                          position: 'top-right', // top And bottom ||  left / center / right
                                          icon: 'checkmark box',
                                          time: 3
                                          });
  });


   $('#btn_accion1').on('click',function () {
    firebase.database().ref('monster/' + $('#id').val()).set({
    accion: 1,
  });

    $.uiAlert({
                                          textHead: 'Led blando del monster '+ $('#name').text(),
                                          text: 'la funcion de ir al baño se ha ejecutado R255 G255 B255',
                                          bgcolor: '#FFFFFF',
                                          textcolor: '#000',
                                          position: 'top-right', // top And bottom ||  left / center / right
                                          icon: 'checkmark box',
                                          time: 3
                                          });

           
});
   $('#btn_accion2').on('click',function () {
     $.ajax({
                      type: 'POST',
                          url: 'admin/monster/update/'+$('#id').val(),
                          data: {
                              '_token': $('input[name=_token]').val(),
                              'accion': '2',
                          },success: function(data) {

                              if ((data.errors)) {
                                  setTimeout(function () {
                                      $('#addModal').modal('show');
                                      toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                                  }, 500);

                                 
                              } else {
                              $.uiAlert({
                                          textHead: 'Led Azul del monster '+ $('#name').text(),
                                          text: 'la funcion de la luz Azul se ha ejecutado R13 G66 B245',
                                          bgcolor: '#0D42F5',
                                          textcolor: '#fff',
                                          position: 'top-right', // top And bottom ||  left / center / right
                                          icon: 'checkmark box',
                                          time: 3
                                          });
                                  
                              
                              }
                          },
                      });   
   });
   $('#btn_accion4').on('click',function () {
     $.ajax({
                      type: 'POST',
                          url: 'admin/monster/update/'+$('#id').val(),
                          data: {
                              '_token': $('input[name=_token]').val(),
                              'accion': '3',
                          },success: function(data) {

                              if ((data.errors)) {
                                  setTimeout(function () {
                                      $('#addModal').modal('show');
                                      toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                                  }, 500);

                                 
                              } else {
                              $.uiAlert({
                                          textHead: 'Led Verde del monster '+ $('#name').text(),
                                          text: 'la funcion de la luz Verde se ha ejecutado R22 G195 B30',
                                          bgcolor: '#16C31E',
                                          textcolor: '#fff',
                                          position: 'top-right', // top And bottom ||  left / center / right
                                          icon: 'checkmark box',
                                          time: 3
                                          });
                                  
                              
                              }
                          },
                      });   
   });
   $('#btn_accion3').on('click',function () {
     $.ajax({
                      type: 'POST',
                          url: 'admin/monster/update/'+$('#id').val(),
                          data: {
                              '_token': $('input[name=_token]').val(),
                              'accion': '4',
                          },success: function(data) {

                              if ((data.errors)) {
                                  setTimeout(function () {
                                      $('#addModal').modal('show');
                                      toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                                  }, 500);

                                 
                              } else {
                              $.uiAlert({
                                          textHead: 'Led Rojo del monster '+ $('#name').text(),
                                          text: 'la funcion de ir al baño se ha ejecutado R236 B16 G16',
                                          bgcolor: '#EC1010',
                                          textcolor: '#fff',
                                          position: 'top-right', // top And bottom ||  left / center / right
                                          icon: 'checkmark box',
                                          time: 3
                                          });
                                  
                              
                              }
                          },
                      });   
   });
</script>

@endsection


