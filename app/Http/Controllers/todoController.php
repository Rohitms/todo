<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class todoController extends Controller
{
  public function save(Request $request){
     $todo = new task;
     $todo->task=$request->task;
      $todo->more=$request->text;
     $todo->save();
      
  }
  public function todowd(){

  return view('welcome');}
 
public function todo(){  
       $todo = new task;
    $todos =$todo->all();
    return view('welcome',['task'=>$todos]) ;

 }



public function del($d)
{
    $todo = task::find($d);
    $todo->delete();
    return back();
}
public function edit($d)
{
    $todo = task::find($d);
    return view('edit',['todo'=>$todo]);

}
public function sav(Request $re)
{
    $todo=task::find($re->hid);
    $todo->more=$re->text;
    $todo->task=$re->task;
    $todo->save();
    return view ('welcome');
}
}