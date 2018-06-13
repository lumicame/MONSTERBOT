@extends('layouts.app')

 @section('slider')
 @include('student.slidebar')

@endsection
@section('content')
<style type="text/css">
	body{
		height: auto;
	}
</style>
<div class="ui grid container">
  <div class="row">
    <div class="fourteen wide column">
    	<div class="ui segment">
    		<div style="background-image: url('https://semantic-ui.com/images/wireframe/image.png');height: 313px;background-position: center center; background-repeat: no-repeat;"></div>
    	<img class="ui medium rounded image" style="height: 150px;width: 150px;margin-top: -130px;" src="{{url('monsters/monsterbot_s.png')}}">
    	<span style="font-size:  24px;color: #000;padding: 5px;">{{$user->name}}</span>
    	</div>
    	</div>
    

  </div>
 <div class="row">
 	<div class="six wide column">
 		<div class="ui segment">
 			@foreach($user->classroom->first()->shedules as $shedule)
 			<p>{{$shedule->subject->first()->name}}<p>
 			@endforeach
 		</div>
 	</div>
 </div>
</div>
 
@endsection