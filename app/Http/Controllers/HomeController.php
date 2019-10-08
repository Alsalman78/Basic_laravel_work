<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Employee;

class HomeController extends Controller
{
    public function about($name,$number){
    	echo $name;
    }

    public function add(){
   	    return view('add');
   }

   public function store(Request $request){
   	$obj = new Employee(); //Create object named $obj for the employee class
   	$obj->name = $request->name;
   	$obj->email = $request->email;
   	$obj->birth_date = $request->birth_date;
   
    $obj->salary = $request->salary;
   
 
    if($obj->save());
    {
    	return redirect()->to('/all');
    }
   }

   public function get(){
   	$data = Employee::all();
   	return view('list', ['employees'=>$data]);
   }

   public function edit($id)
   {
   	 $data = Employee::find($id);// select * from employes where id=?
   	 return view('edit',['employee'=>$data]);
   }

   public function update(Request $request,$id){
   	$obj =  Employee::find($id);
   	$obj->name = $request->name;
   	$obj->email = $request->email;
   	$obj->birth_date = $request->birth_date;
    
    $obj->salary = $request->salary;
     
    if($obj->save());
    {
    	//echo 'Succesfully inserted';

    	return redirect()->to('/all');
   }
   }

    public function delete($id)
   {
   	 $obj = Employee::find($id);
   	if($obj->delete()){ //laravel's Built in function 'delete'
   	 	return redirect()->to('/all');
   	 }
   }
}



