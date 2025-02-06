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
return redirect()->route('addsite');
}
public function editSite($id)
{
    $editSites = new Sites();
    return view('forms.editSite', ['data'=>$editSites->find($id)]);
}
public function editSiteSubmit($id, Request $sites)
{
    $editSites = Sites::find($id);
    $editSites->name = $sites->input('name');
    $editSites->URL = $sites->input('URL');
    $editSites->sites_categorie_id = $sites->input('sites_categorie_id');
    $editSites->save();
    return redirect()->route('addsite');
    }
    public function deleteSite($id)
    {
        Sites::find($id)->delete();
        return redirect()->route('addsite');
    }
}