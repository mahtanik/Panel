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
Auth::routes();

//coming soon
//Route::get('/campaignes' , 'PageController@campaignes');

//coming soon
//Route::get('/campaignesDiagrams' , 'PageController@Datarep_campaignes');

//Route::get('/login' , 'LoginController@login');

Route :: get('/serviceSummary2' , 'ServiceController@updateUsersRecord');

Route::get('/servicesSummary' , 'ServiceController@service_summary' );

Route::get('/services' , 'ServiceController@services' );

Route::get('/servicesDiagrams' , 'ServiceDiagramsController@Fill_init' );

Route::get('servicesDiagrams3' , 'ServiceDiagramsController@Fill' );

Route::get('/dashboard' , 'DashboardController@counter');

Route:: get('/services2' , 'ServiceController@allUsersRecord');

Route:: get('/usersPage' , 'UserController@show');
