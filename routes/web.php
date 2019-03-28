<?php

use App\Http\Controllers\FavoriteController;

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
})->name('GETaccueil');;

Route::get('/inscription', 'InscriptionController@formulaire')->name('GETinscription');

Route::post('/inscription', 'InscriptionController@traitement')->name('POSTinscription');

Route::get('/connection', 'ConnectionController@formulaire')->name('GETconnexion');

Route::post('/connection', 'ConnectionController@traitement')->name('POSTconnexion');

Route::get('/mushrooms', 'MushroomController@showAllMushrooms')->name('GETmushrooms');

Route::get('/mushroom/{id}', 'MushroomController@showMushroom')->name('GETmushroom');

Route::get('/lexique', 'LexiqueController@showLexique')->name('GETlexique');

Route::get('/favorite/{id}', 'FavoriteController@toggleFavorite')->name('GETtoggleFavorite');
Route::get('/favorites', 'FavoriteController@showListFavorite')->name('GETlistFavorite');

Route::get('/testpdf', function () {
    return view('pdf');
});



Route::group([
    'middleware' => 'App\Http\Middleware\Auth'
], function () {


    Route::get('/my-account', 'AccountController@home')->name('GETmonCompte');

    Route::get('/disconnection', 'AccountController@disconnection')->name('GETdeconnexion');

    Route::post('/password-change', 'AccountController@passwordChange')->name('POSTpassword');


    Route::group([
        'middleware' => 'roles',
        'roles' => ['mycologist']
    ], function () {
        Route::post('/mushroomAdd', 'MushroomController@addTraitement')->name('POSTaddMushroom');
        Route::get('/mushroomAdd', 'MushroomController@addFormulaire')->name('GETaddMushroom');

        Route::get('/mushroom/{id}/edit', 'MushroomController@editFormulaire')->name('GETeditMushroom');
        Route::post('/mushroom/{id}/edit', 'MushroomController@editTraitement')->name('POSTeditMushroom');

        Route::get('/mushroom/{id}/delete', 'MushroomController@deleteMushroom')->name('GETdeleteMushroom');

        Route::get('/cards', 'CardController@showAll')->name('GETcards');
        Route::get('/addToCart/{id}', 'CardController@addToCart')->name('GETaddToCart');

        Route::get('/my-list', 'CardController@getList')->name('GETmaListe');

        Route::post('/checkout', 'CardController@postCheckout')->name('POSTcheckout');

        Route::get('/history', 'CardController@historyIndex')->name('GEThistory');

        Route::get('/reduce/{id}', 'CardController@getReduceByOne')->name('GETreduce');

        Route::get('remove/{id}', 'CardController@getRemoveItem')->name('GETremove');
        Route::get('/print/{order}', 'CardController@print')->name('GETprint');

        Route::get('/lexique/add', 'LexiqueController@addLexique')->name('GETaddLexique');
        Route::post('/lexique/add', 'LexiqueController@addLexiqueTraitement')->name('POSTaddLexique');
        Route::get('/lexique/{id}/edit', 'LexiqueController@editLexique')->name('GETeditLexique');
        Route::post('/lexique/{id}/edit', 'LexiqueController@editLexiqueTraitement')->name('POSTeditLexique');
        Route::get('/lexique/{id}/delete', 'LexiqueController@deleteLexique')->name('GETdeleteLexique');
    });


    Route::group([
        'middleware' => 'roles',
        'roles' => ['admin']
    ], function () {
        Route::get('/users', 'UsersController@index')->name('GETusers');
        Route::post('/assignroles', 'UsersController@assignRoles')->name('POSTassignRoles');
    });
});
