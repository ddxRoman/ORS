<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutorizationController extends Controller
{
    public function submit(Request $auth){
dd ($auth->input('name'), $auth->input('password'), \Request::ip());
    }
}
