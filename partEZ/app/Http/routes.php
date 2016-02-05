<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('invite_response', function(){
    return view('inviteresponse');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'ProfileController@show'
]);

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/sendtest', 'Email\EmailController@sendTestEmail');
    Route::get('create_event', 'EventController@index');
    Route::get('accept_invite/{eid}/{uid}', ['as' => 'accept_invite', 'uses' => 'EventController@inviteAccept']);
    Route::get('decline_invite/{eid}/{uid}', ['as' => 'decline_invite', 'uses' => 'EventController@inviteDecline']);

    Route::post('create_event', 'EventController@store');
    Route::post('invite_event', 'EventController@validateEmails');
    Route::post('send_invites', 'EventController@inviteUsers');
    Route::post('event/{id}', ['as' => 'events.event_details', 'uses' => 'EventController@details']);
    Route::post('polls/{polls}', ['as' => 'polls.poll_options', 'uses' => 'EventController@details']);
    Route::post('create_poll', 'EventController@validatePoll');
    Route::post('submit_poll', 'EventController@submitPoll');
});

