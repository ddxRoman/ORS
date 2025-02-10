<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tasks;
use Illuminate\Support\Facades\DB;


class TasksController extends Controller
{
    // public function taskView()
    // {
    //     $tasks = DB::table('tasks')->where('status', '1');
    //     return $tasks->id;
    // }

    public function taskView(){
        // return view('layouts.Taskmeneger\taskmanagerAccordion', ['taskView'=> Tasks::all()]);
        return view('layouts.Taskmeneger\taskmanagerAccordion', ['taskView'=> Tasks::all()]);
        
    }

}
