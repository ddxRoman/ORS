<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Creeds;
use Illuminate\Http\Request;
use App\Http\Requests\ErrorRequest;

class CreedsController extends Controller
{
    public function creeds_lists(){
        return view('creeds_lists', ['lists_creeds'=> Creeds::all()]);
        
    }
    public function submit(ErrorRequest $creeds){

$autorization = new Creeds();
$autorization->name = $creeds->input('name');
$autorization->url = $creeds->input('url');
$autorization->login = $creeds->input('login');
$autorization->password = $creeds->input('password');

$autorization->save();

}
}
