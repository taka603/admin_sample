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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user_entry', 'UserEntryController@index');
Route::get('/user_entry/{id}', 'UserEntryController@detail');
//管理側
Route::group(['middleware' => ['auth.admin']], function() {

    //管理側トップ
    Route::get('/admin', 'admin\AdminTopController@show');
    //ログアウト
    Route::post('/admin/logout', 'admin\AdminLogoutController@logout');
    //ユーザー一覧
    Route::get('/admin/user_list', 'admin\ManageUserController@showUserList');
    //ユーザー詳細
    Route::get('/admin/user/{id}', 'admin\ManageUserController@showUserList');

});

//管理側ログイン
Route::get('/admin/login', 'admin\AdminLoginController@showLoginForm');
Route::post('/admin/login', 'admin\AdminLoginController@login');