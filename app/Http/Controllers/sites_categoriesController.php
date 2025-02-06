<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sites_categorie;
use Illuminate\Support\Facades\DB;

class sites_categoriesController extends Controller
{
    public function sites_categorie_view(){
        $user = DB::table('sites_categories')->where('type', 0);
        echo "Tyta zdesa";
            }
}