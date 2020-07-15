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
Route::apiResource('/books', 'BookController')->except(['update','destroy']);
Route::put('/books/{id}', 'BookController@update')->name('books.update');
Route::delete('/books/{id}', 'BookController@destroy')->name('books.destroy');
