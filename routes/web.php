<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/', function () {
//     return view('index');
// });
//-------------------------Route Camion--------------------------------------//
Route::get('/camion',[
    'as' => 'camion',
    'uses'  => 'CamionController@createCamion'
]);
Route::post('/addCamion',[
    'as' => 'addCamion',
    'uses'  => 'CamionController@storeCamion'
]);
Route::get('/showCamions',[
    'as' => 'showCamions',
    'uses'  => 'CamionController@showCamion'
]);
Route::get('/editCamion',[
    'as' => 'editCamion',
    'uses'  => 'CamionController@editCamion'
]);
Route::post('/updateCamion',[
    'as' => 'updateCamion',
    'uses'  => 'CamionController@updateCamion'
]);
//-----------------------Fin Route Camion------------------------------------//
//-------------------------Route Voyage--------------------------------------//
Route::get('/voyages',[
    'as' => 'voyages',
    'uses'  => 'VoyageController@indexVoyage'
]);
Route::get('/infos',[
    'as' => 'infos',
    'uses'  => 'VoyageController@infosVoyages'
]);
Route::get('/infoVoyage/{id}',[
    'as' => 'infoVoyage',
    'uses'  => 'VoyageController@infoVoyage'
]);
Route::get('/voyage',[
    'as' => 'voyage',
    'uses'  => 'VoyageController@createVoyage'
]);
Route::post('/addVoyage',[
    'as' => 'addVoyage',
    'uses'  => 'VoyageController@storeVoyage'
]);
Route::get('/showVoyage',[
    'as' => 'showVoyage',
    'uses'  => 'VoyageController@showVoyage'
]);
Route::get('/editVoyage',[
    'as' => 'editVoyage',
    'uses'  => 'VoyageController@editVoyage'
]);
Route::post('/updateVoyage',[
    'as' => 'updateVoyage',
    'uses'  => 'VoyageController@updateVoyage'
]);
//-----------------------Fin Route Voyage------------------------------------//
//-------------------------Route Panne--------------------------------------//
Route::get('/panne',[
    'as' => 'panne',
    'uses'  => 'PanneController@createPanne'
]);
Route::post('/addPanne',[
    'as' => 'addPanne',
    'uses'  => 'PanneController@storePanne'
]);
Route::get('/showPanne',[
    'as' => 'showPanne',
    'uses'  => 'PanneController@showPanne'
]);
Route::get('/editPanne',[
    'as' => 'editPanne',
    'uses'  => 'PanneController@editPanne'
]);
Route::post('/updatePanne',[
    'as' => 'updatePanne',
    'uses'  => 'PanneController@updatePanne'
]);
//-----------------------Fin Route Panne------------------------------------//



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
