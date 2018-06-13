@extends('layouts.app')

 @section('slider')
 @include('teacher.slidebar')

@endsection
@section('content')

<div class="container"  style="margin-right: 3%;margin-left: 3%">
   <div class="ui six doubling cards">
      @foreach($shedules as $shedule)

        @include('teacher.courses')

      @endforeach

       
       
   </div>
</div>
@endsection