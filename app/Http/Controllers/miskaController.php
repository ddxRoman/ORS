<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class miskaController extends Controller
{
public function view(){
    
    $users = DB::table('sites')->where('sites_categorie_id', 'Миски')->get();

    foreach ($users as $user) {
        echo "<a href=".$user->URL.">"."<button>".$user->name."</button></a><br>";
    }
        }
    }