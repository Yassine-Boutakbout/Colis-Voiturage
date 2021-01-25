<?php

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

Route::get('/home', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::post('/home','ChercherTrajetController@chercher');

Route::get('/recherche', function () {
    return view('recherche');
});

Route::get('/proposer','VilleController@VilleVehicule');

Route::post('/proposer','AddTrajetController@addNewTrajet');

Route::get('/message','MessageController@client');

Route::post('/message','MessageController@send');

Route::get('/reservation',function () {
    return view('reservation');
});


Route::get('/afficher/{id} ','TrajetController@afficher');

Route::POST('/afficher/{id} ','MakeReservationController@afficher');



//jQuery ...
Route::get('/msg/{id} ','MessageController@msg');



//ayoub routes

Route::get('/auth',function () {
    return view('auth');
});

Route::post('/auth','authController@check');

Route::get('/register','registerController@register');

Route::post('/register','registerController@addNewClient');

Route::post('/lanceralert','lancerAlertController@addNewAlert');

Route::get('/lanceralert','lancerAlertController@addNewAlert')->middleware('login');

Route::get('/profilecond',function () { 
    return view('profileCond');
})->middleware('login');

Route::get('/profileexp',function () { 
    return view('profileExp');
});

Route::get('/vehecules/{id_c}','veheculesController@getVehicules');

Route::get('/trajets/{id_c}','trajetsController@getTrajets');

Route::post('/addvehecule','veheculesController@addVehecule');

Route::post('/deletevehicule/{matricule}','veheculesController@deleteVehicule');

Route::get('/logout','logoutController@destory');

Route::get('/reservations/{id_e}','reservationsController@getReservations');

Route::post('/deletetrajet/{id_t}','trajetsController@deleteTarjet');

Route::post('/deletereservation/{id_r}','resrvationsController@deleteReservation');

Route::get('/message','MessageController@client');

Route::post('/message','MessageController@send');




