<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sites;

class SitesController extends Controller
{

    public function submit(Request $sites){

$addSites = new Sites();
$addSites->name = $sites->input('name');
$addSites->URL = $sites->input('URL');
$addSites->sites_categorie_id = $sites->input('sites_categorie_id');

$addSites->save();
}
}
