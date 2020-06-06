<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class Taskcontroller extends Controller
{
    
    public function store(Request $request){
        $task=new Task;
    $this->validate($request,['taskadd'=>'required|max:100|min:5',]);
   

    $task->task=$request->taskadd;
    $task->save();
    return redirect()->back();

    }

}
