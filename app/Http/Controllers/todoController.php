<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class todoController extends Controller
{
  public function save(Request $request){
     $todo = new task;
     $todo->task=$request->task;
     $todo->save();
      
  }
  public function todow(){

      return view('welcome');
  }
}