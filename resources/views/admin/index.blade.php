@extends('layouts.app')

 @section('slider')
 @include('admin.slidebar')

@endsection
@section('content')
<style type="text/css">
	body{
		height: auto;
	}
</style>
<div class="container"  style="margin-right: 3%;margin-left: 3%">
   <div class="ui six doubling cards">
      

       @include('admin.menu')
       
   </div>
</div>
@endsection

