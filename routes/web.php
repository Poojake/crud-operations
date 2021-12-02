<?php

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

Route::get('/', function () {
    return view('welcome');
});
  
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   

    
    Route::group(['prefix' => 'users'], function() 
    {
            Route::get('/listUsers', 'UsersController@index')->name('index');
            Route::get('/addUser', function(){
                return view('adduser');
            });
            Route::post('/store','UsersController@store')->name('store');
            Route::get('/editUser/{id}','UsersController@edit')->name('edit');
            Route::post('/update','UsersController@update')->name('update');
            Route::get('/delete/{id}','UsersController@delete')->name('delete');
            
    });

});



        
  

 