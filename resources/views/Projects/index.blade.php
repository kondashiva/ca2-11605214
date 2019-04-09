@extends('layout')

@section('content')
        
       
  <main role="main" class="container">
  <div class="">
    <h1>All Costumers</h1>
    <div class="container">
              
    <table class="table">
      <thead>
      <tr>
        <th>Customer_Id</th>
        <th>Customer_Name</th>
        <th>Username</th>
        
      </tr>
    </thead>
    <tbody>
    	@foreach($p as $project)
      <tr>
      	<td>{{$project->id}}</td>
         <td><a href="/projects/{{$project->id}}/edit">{{$project->C_Name}} </a></td>
        <td>{{$project->Username}}</td>
        
        
      </tr>
       @endforeach
      
    </tbody>
  </table>
  <a href="/projects/create">
    <button type="submit" class="btn btn-primary">New ID</button>
  </a>
</div>
</div>
</main>
@endsection

