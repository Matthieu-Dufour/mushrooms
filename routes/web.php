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

/* MEMO :
 *   firstOrFail() pour 404
 *
 */

Route::view('/', 'welcome');

Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscription', 'InscriptionController@traitement');


Route::get('/connection', 'ConnectionController@formulaire');

Route::post('/connection', 'ConnectionController@traitement');


Route::group([
    'middleware' => 'App\Http\Middleware\Auth'
], function () {

    Route::get('/my-account', 'AccountController@home');

    Route::get('/disconnection', 'AccountController@disconnection');

    Route::post('/password-change', 'AccountController@passwordChange');

});