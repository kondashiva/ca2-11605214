<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\project;

class ProjectController extends Controller
{
    public function index(){

    	    $p=project::all();


    	return view('Projects.index',compact('p'));
    }
    public function create(){




    	return view('Projects.create');
    }
     public function store(Project $p){
         
         

         $p=new project;
         $p->C_Name=request('C_Name');
         $p->Username=request('Username');
         $p->password=request('password');
         $p->save();

    	return redirect('/projects') ;
    }
    public function edit($id){
    	$p=project::find($id);

    	return view('Projects.edit',compact('p'));
    }
    public function update($id){
    	  $p=project::find($id);
         $p->C_Name=request('C_Name');
         $p->Username=request('Username');
         $p->password=request('password');
         $p->update();
    	return redirect('/projects');
    }
    public function show($id){
    	$p=project::find($id);

    	return view('Projects.show',compact('p'));
    }
    public function destroy($id){
    	project::find($id)->delete();
        ;
    	return redirect('/projects');
    }


}
