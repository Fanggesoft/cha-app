<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



      Route::get('/api/chat-rooms',           array('uses' =>'ChatRoomController@getAll'));
      Route::post('/api/chat-rooms',          array('uses' =>'ChatRoomController@create'));
       Route::get('/api/chat-rooms/{chatRoom}',array('uses' =>'ChatRoomController@show'));



    Route::get('/api/messages',            array('uses' =>'MessageController@getAll'));
     Route::get('/api/messages/{id}',     array('uses' =>'MessageController@getByChatRoom'));

//Route::get('/api/messages/{chat-room}',array('uses' =>'MessageController@getByChatRoom'));

     Route::post('/api/messages/{chatRoom}',array('uses' =>'MessageController@postCreateNewMessage'));

     Route::get('/api/messages/{lastMessageId}/{chatRoom}',array('uses' =>'MessageController@getUpdates'));

Route::get('/api/users/login/mike',    array('uses' =>'Auth\AuthController@loginMike'));
Route::get('/api/users/login/john',    array('uses' =>'Auth\AuthController@loginJohn'));




