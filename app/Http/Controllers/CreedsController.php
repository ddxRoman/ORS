<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Creeds;
use App\Http\Requests\ErrorRequest;

class CreedsController extends Controller
{
    public function creeds_lists(){
        return view('creeds_lists', ['lists_creeds'=> Creeds::all()]);
        
    }
    public function submit(Request $creeds){

$autorization = new Creeds();
$autorization->name = $creeds->input('name');
$autorization->url = $creeds->input('url');
$autorization->login = $creeds->input('login');
$autorization->password = $creeds->input('password');

$autorization->save();
return redirect()->route('addCreeds');

}

public function editcreed($id){

    $editCreeds = new Creeds();
    return view('forms.editCreed', ['data'=>$editCreeds->find($id)]);

}
public function editCreedSubmit($id, Request $creeds){

    $editCreeds = Creeds::find($id);
    $editCreeds->name = $creeds->input('name');
    $editCreeds->URL = $creeds->input('url');
    $editCreeds->login = $creeds->input('login');
    $editCreeds->password = $creeds->input('password');
    
    $editCreeds->save();
    return redirect()->route('addCreeds');
    }

    public function deletecreed($id)
    {
        Creeds::find($id)->delete();
        return redirect()->route('addCreeds');
    }

}
