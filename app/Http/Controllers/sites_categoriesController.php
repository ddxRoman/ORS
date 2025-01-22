<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sites_categorie;

class sites_categoriesController extends Controller
{
    public function sites_categorie(){
        return view('index', ['lists_sites'=> sites_categorie::all()]);

            }
}
