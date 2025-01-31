<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitesviewController extends Controller
{
    public function view( $folders){

        $users = DB::table('sites')->where('sites_categorie_id', $folders)->get();
    
        foreach ($users as $user) {
            echo "<a href=".$user->URL." target='_blank'>"."<button>".$user->name."</button></a>";
        }
            }
}