<?php

use App\Http\Controllers\GuestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'GuestController@home')->name('home');
Route::get('/postcard/create', 'GuestController@postcardCreate')-> name('create.postcard');
Route::post('/postcard/store','GuestController@postcardStore') ->name('postcard.store');

Route::get('/api/postcards/list', 'ApiController@getPostcards')->name('api.postcards.list');
