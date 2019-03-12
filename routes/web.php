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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscription', 'InscriptionController@traitement');


Route::get('/connection', 'ConnectionController@formulaire');

Route::post('/connection', 'ConnectionController@traitement');

Route::get('/mushrooms', 'MushroomController@showAllMushrooms');

Route::get('/mushroom/{id}', 'MushroomController@showMushroom');

Route::get('/print/{order}','CardController@print');

Route::post('/assignroles', 'UsersController@assignRoles');


Route::group([
    'middleware' => 'roles',
    'roles' => ['admin']
], function () {
    
});

Route::group([
    'middleware' => 'roles',
    'roles' => ['mycologist']
], function () {
    
});

Route::group([
    'middleware' => 'roles',
    'roles' => ['user']
], function () {
    
});

Route::group([
    'middleware' => 'App\Http\Middleware\Auth'
], function () {

    Route::get('/my-account', 'AccountController@home');

    Route::get('/disconnection', 'AccountController@disconnection');

    Route::post('/password-change', 'AccountController@passwordChange');

    /* Mycologue */

    Route::post('/mushroomAdd', 'MushroomController@addTraitement');
    Route::get('/mushroomAdd', 'MushroomController@addFormulaire');

    Route::get('/mushroom/{id}/edit', 'MushroomController@editFormulaire');
    Route::post('/mushroom/{id}/edit', 'MushroomController@editTraitement');

    Route::get('/cards','CardController@showAll');
    Route::get('/addToCart/{id}', 'CardController@addToCart');

    Route::get('/my-list', 'CardController@getList');

    Route::post('/checkout','CardController@postCheckout');

    Route::get('/history','CardController@historyIndex');

    Route::get('/reduce/{id}','CardController@getReduceByOne');

    Route::get('remove/{id}', 'CardController@getRemoveItem');

    /* Admin */
    Route::get('/users', 'UsersController@index');
});