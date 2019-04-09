@extends('layout')

@section('content')
 <main role="main" class="container">
  <div class="jumbotron">
        
	<div class="container">
  <h2>Project {{$p->id}}</h2>
  
    <div class="form-group">
      <label for="text">Name</label>
      <input type="text" class="form-control"  value="{{$p->C_Name}}" name="C_Name">
    </div>
    <div class="form-group">
      <label for="text">Username: </label>
      <input type="text" class="form-control" value="{{$p->Username}}" name="Username">
    </div>
    
   
</div>
</div>
</main>
@endsection

