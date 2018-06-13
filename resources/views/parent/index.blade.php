@extends('layouts.app')


@section('slider')
  <a class="item" >
    <i class="inbox icon"></i>
    Mensajes
  </a>
@endsection
@section('content')

<div class="container" style="margin-right: 3%;margin-left: 3%">
   <div class="ui five doubling cards">
       @foreach($students as $student)

      @include('recursos.card')
      @include('recursos.modal')

       @endforeach
   </div>
</div>
@include('recursos.footer')

@endsection

