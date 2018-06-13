@extends('layouts.app')

 @section('slider')
 @include('student.slidebar')

@endsection
@section('content')
<style type="text/css">
	body{
		height: auto;
	}
	#cardhover:hover{
		background: #000;
	}
</style>
<div class="container"  style="margin-right: 3%;margin-left: 3%">

      <p>Estas ingresando como Estudiante</p>
   <div class="ui five doubling cards">
      

       @foreach($shedules as $shedule)

        @include('student.horarios')

      @endforeach

       
   </div>
</div>
@endsection
