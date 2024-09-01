<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
class tasksController extends Controller
{
    function index(Request $request)
    {
        $user = $request->user();
        $task = task::where('user_id',$user->id)->get();
        // $task = $user->tasks; aita kaj korena 2nd way
        return view('tasks.task',['tasks'=>$task]); //akhane $task ta hocche variable ja uporer code a use hoyeche
    }

    //all-task-form
    function store(Request $request)
    { 
        // $current_user = Auth::user()->id;
        // $current_user = auth()->user()->id; ai 2vabeo korajai abr $request diye o
        $current_user = $request->user()->id;
        $request->validate([
            'name' => "required",
            'status' => "required",
        ]);

        $task = new task();
        $task->name = $request->name;
        $task->status = $request->status;
        $task->user_id = $current_user;
        $task->save();
        return redirect()->route('tasks.task');

    }
    function destroy(Request $request,Task $task)
    {
        $user = $request->user();
        if($task->user_id == $user->id){
            $task->delete();
            return redirect()->route('tasks.task');
        }else{
            abort(403,"you are not allow to delete this task");
        }
        
    }
}
// PGT in medicine from dhaka medical college and hospital for six month