<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\sites_categorie;
use App\Models\Creeds;
use App\Models\Sites;
use App\Http\Controllers\SitesviewController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/


Route::get('/', function () {
    return view('index', ['lists_sites'=>sites_categorie::all()], ['docs_lists'=>sites_categorie::all()]);
})->name('home');
Route::get('creeds_lists', function () {
    return view('folders.creeds_lists', ['creeds_lists'=>Creeds::all()]);
})->name('creeds_lists');

Route::get('addCreeds', function () {
    return view('forms.addCreeds', ['addCreeds'=>Creeds::all()]);
})->name('addCreeds');
Route::get('addsite', function () {
    return view('forms.addsite', ['addSites'=>Sites::all()]);
})->name('addsite');
Route::get('tg-bot', function () {
    return view('forms.tgbot');
})->name('tgbot');


Route::get('admin', function () {    return view('index_admin');})->name('admin');
Route::get('finance', function () {    return view('finance.finance');})->name('finance');
Route::get('underway', function () {    return view('Errors_blade.underway');})->name('underway');
Route::get('login', function () {    return view('autorization.autorizationPage');})->name('autorization');
Route::get('countsymbol', function () {    return view('folders.count_symbol');})->name('count');
Route::get('taskmanager', function () {    return view('taskmanager.taskmanagerAccordion');})->name('taskmanager');
Route::get('/search-{No}',[SitesviewController::class, 'view'])->name('websearch');


Route::post('autorization/submit', 'App\Http\Controllers\autorizationsController@submit')->name('autorization-form');
Route::post('countsymbol/count', 'App\Http\Controllers\CountSymbolTxtController@CountSymbol')->name('count-form');

Route::get('editSite-{id}', 'App\Http\Controllers\SitesController@editSite')->name('edit-site-form');
Route::post('editSite-{id}', 'App\Http\Controllers\SitesController@editSiteSubmit')->name('edit-site');
Route::get('deleteSites-{id}', 'App\Http\Controllers\SitesController@deleteSite')->name('delete-site');

Route::post('addsite/submit', 'App\Http\Controllers\SitesController@submit')->name('add-site-form');
Route::post('tgbot/submit', 'App\Http\Controllers\SitesController@submit')->name('tgbot-form');
Route::post('TgBotSend', 'App\Http\Controllers\TgBotController@send')->name('TgBotSend');
Route::post('addcreeds/submit', 'App\Http\Controllers\CreedsController@submit', 
function(){
    return redirect('addCreeds');    //Я ХЗ,  в ДОке написано что это дложно работать, а оно не работает
}
)->name('addcreeds-form');

// ----------------------------Тест связи 1 к многим-------------------------------------------------------------------------------------------------------