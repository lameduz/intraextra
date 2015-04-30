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




Route::group(['domain' => '{username}.intranet.dev'], function()
{

    Route::get('/', function($username)
    {
        return 'Hello'.$username;
    });

    Route::get('/', 'ContactsController@getLogin');
    Route::resource('organisations','OrganisationsController');
    Route::get('test','OrganisationsController@loadSettings');
    Route::resource('sites','SitesController');
    Route::resource('contacts.organisations','ContactsOrganisationsController');
    Route::get('contact/{contact}/organisation/{organisation}/upload',['uses' => 'ContactsOrganisationsController@getUpload']);
    Route::post('contact/{contact}/organisation/{organisation}/upload',['uses' => 'ContactsOrganisationsController@postUpload', 'as' => 'contactorg.upload']);
    Route::get('confirm/{token}',['uses' => 'OrganisationsController@confirm','as' => 'organisations.confirm']);
    Route::controller('contacts','ContactsController');

    Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);

});

Route::group(['domain' => '{username}.extranet.dev'], function()
{

    Route::get('/', function($username)
    {
        return 'Hello Extranet';
    });

    //Route::get('/', 'ContactsController@getLogin');


});



Route::get('/', function()
{
    return 'Hello';
});


// Route::get('home', 'HomeController@index');
// Route::any('register',['uses' => 'OrganisationsController@create', 'as' => 'organisations.create']);
// Route::any('login',['uses' => 'UsersController@login', 'as' => 'user.login']);
/*
