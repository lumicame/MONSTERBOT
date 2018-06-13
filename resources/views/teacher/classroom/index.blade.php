@extends('layouts.app')


@section('title')
{{$title}}
@endsection

@section('slider')
 @include('teacher.slidebar')

@endsection
@section('content')
      
<div class="container" style="margin-right: 3%;margin-left: 3%">
   <div class="ui six doubling cards">
{{ csrf_field() }}

  @foreach($users as $user)

      @include('teacher.classroom.user')
     
       @endforeach

<div class="item{{$user->id}} ui raised card open-modal" id="draggable" data-id="{{$user->id}}" data-name="{{$user->name}}" data-username="{{$user->username}}" style="cursor: pointer;">
    <div class="content">
      <center>
      <img src="https://teach-static.classdojo.com/f3bc748410ad4803c928f1153e789c9f.png" style="max-height: 150px;height: auto;margin-top: 20px;margin-bottom: 10px">
      <p style="font-weight: 700;
    font-size: 1.28571429em;">Agregar alumno</p>
    </center>
    </div>
    
  </div>
   </div>
    <div id="openModal" class="ui modal">
  <div class="header" ><span class="username" id="username"></span></div> 
  <div class="content">
    <p>Este es el modal del alumno <span class="name" id="name"></span></p>
    <form><input type="hidden" value="" id="id" >
    </form>

     <div class="ui buttons">  
      <?php 
        $actions=App\Action::all();
      ?>
     @foreach($actions as $action)
  <button class="ui button btn_accion" style="background-color: {{$action->color}};color:{{$action->textcolor}} "  data-id="{{$action->id}}" data-name="{{$action->name}}" data-color="{{$action->color}}" data-textcolor="{{$action->textcolor}}" data-description="{{$action->description}}" data-action="{{$action->accion}}">{{$action->name}}</button>
@endforeach
</div>
  </div>
</div>
</div>
<meta name="_token" content="{{ csrf_token() }}"/>
@include('recursos.footer')
<script type="text/javascript">


 function asignar(id) {
    var x = $('#select'+id).val();
    $('#monsters_nit'+id).val(id);
    $.ajax({
                      type: 'POST',
                          url: 'monster/update/'+x,
                          data: {
                              '_token': $('input[name=_token]').val(),
                              'accion': 'activo',
                              'user':id,
                          },success: function(data) {

                              if ((data.errors)) {
                                  setTimeout(function () {
                                      $('#addModal').modal('show');
                                      toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                                  }, 500);

                                 
                              } else {
                              $.uiAlert({
                                          textHead: ''+data+'',
                                          text: '',
                                          bgcolor: '#0D42F5',
                                          textcolor: '#fff',
                                          position: 'top-right', // top And bottom ||  left / center / right
                                          icon: 'checkmark box',
                                          time: 3
                                          });
                                  
                              
                              }
                          },
                      });  

  }

  var database = firebase.database();
  function modalopen(id) {
                $('#id').val(id);
    $('#openModal').modal('show');
  }
 

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


  
</script>

@endsection




