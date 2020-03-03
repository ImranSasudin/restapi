<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$router->group(['prefix' => ''], function () use ($router) {
    $router->get('participants',  ['uses' => 'ParticipantController@showAllParticipants']);

    $router->get('participants/{id}', ['uses' => 'ParticipantController@showOneParticipant']);

    $router->post('participants', ['uses' => 'ParticipantController@create']);

    $router->delete('participants/{id}', ['uses' => 'ParticipantController@delete']);

    $router->put('participants/{id}', ['uses' => 'ParticipantController@update']);
  });
