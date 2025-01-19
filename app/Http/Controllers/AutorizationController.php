<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ErrorRequest;

class AutorizationController extends Controller
{
    public function submit(ErrorRequest $auth){
dd ($auth->input('name'), $auth->input('password'), \Request::ip());


    }
}
