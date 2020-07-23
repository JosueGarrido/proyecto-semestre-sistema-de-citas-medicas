<?php

use App\Pacients;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get('pacients', 'PacientsController@index');
Route::get('pacients/{pacients}', 'PacientsController@show');
Route::post('pacients', 'PacientsController@store');
Route::put('pacients/{pacients}', 'PacientsController@update');
Route::delete('pacients/{pacients}', 'PacientsController@delete');
