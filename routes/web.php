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
Route::get('/', function () {
    return view('main.main');
});
Route::get('/home', 'HomeController@index');
Route::get('/become','Admin\DashboardController@index');
Route::group(
    ['prefix'=> Config('tm.admin_prefix'),
        'middleware' => 'admin',
        'namespace'=>'Admin'
    ],function(){
        Route::get('/refreshrolesperms','RoleController@refreshRolesPerms');
        Route::get('/rolelist','RoleController@list');
        Route::resource('/role','RoleController');

        Route::get('/userrolelist','UserRoleController@list');
        Route::resource('/userrole','UserRoleController');

        Route::get('/dashboard','DashboardController@index');
        Route::post('/logout','DashboardController@logout');
        Route::get('/','DashboardController@index');

        Route::get('/contentlist','ContentController@list');
        Route::resource('/content','ContentController');
        
        Route::get('/categorylist','CategoryController@list');
        Route::resource('/category','CategoryController');
      }
);
