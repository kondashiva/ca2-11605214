@extends('layout')

@section('content')

</style>
 <main role="main" class="container">
  <div class="">
        
	<div class="container">
  <h2>Edit  ID</h2>
 <form method="POST" action="/projects/{{$p->id}}">

           		{{ csrf_field() }}
           		{{ method_field('PATCH') }}
    <div class="form-group">
      <label for="text">Name:</label>
      <input type="text" class="form-control"  value="{{$p->C_Name}}" name="C_Name">
    </div>
    <div class="form-group">
      <label for="text">Username</label>
      <input type="text" class="form-control" value="{{$p->Username}}" name="Username">
    </div>
    <div class="form-group">
      <label for="text">Password</label>
      <input type="password" class="form-control" value="{{$p->password}}" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>

    
    
  </form><br><br>

  <form method="POST" action="/projects/{{$p->id}}">

              {{ csrf_field() }}
              {{ method_field('DELETE') }}
            
            <button type="submit" class="btn btn-danger">Delete</button>
   </form>
  
  
</div>
</div>
</main>
@endsection


