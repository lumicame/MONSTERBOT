


@extends('layouts.app')


@section('slider')

<a class="item">
    <i class="history icon"></i>
    Historia
  </a>
  <a class="item" >
    <i class="inbox icon"></i>
    Mensajes
  </a>
@endsection
@section('content')
      
       
<div class="container" style="margin-right: 3%;margin-left: 3%">
   <div class="ui five doubling cards">
{{ csrf_field() }}
 <div class="item ui raised card open-modal" id="draggable" style="cursor: pointer;">
    <div class="content">
      <img src="{{url('monsters/monsterbot_s.png')}}" style="max-height: 150px;height: auto;">
      <p style="font-weight: 700;
    font-size: 1.28571429em;">Luis Cabarcas</p><p id="">Hola wey</p>
    </div>
    <div style="position: absolute; top: -1rem; right: -1rem; padding: 0px; margin: 0px; border: 0px; text-align: right;"><div style="    display: inline-block;
    border: 3px solid white;
    border-radius: 50px;
    color: white;
    text-align: center;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 3px 0px;
    font-weight: 600;
    min-width: 3rem;
    font-size: 18px;
    background-color: rgb(147, 213, 83);
    line-height: 2;">5</div></div>
  </div>
 
</div>
  </div>
<meta name="_token" content="{{ csrf_token() }}"/>
@include('recursos.footer')
@endsection

@section('script')

<script>
  $( function() {
    $( "#draggable" ).draggable({containment: ".container"});
  } );
  </script>
@endsection


