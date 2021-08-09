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
    return redirect('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/firebase',function(){
	return view('firebase');
});
Route::get('/familytree',function(){
	return view('familytree');
});
Route::get('/myfamily',function(){
	return view('myfamily');
});
 




//////////////////////////////////////////////////////////////////////////    ADMIN
Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::post('/admin/login', 'Auth\LoginController@adminLogin')->name('admin/login');
Route::get('/admin/password/reset', 'Auth\LoginController@adminLogin');
Route::post('/admin/password/reset', 'Auth\LoginController@adminLogin');

Route::group(['middleware' => ['throttle', 'auth:admin', 'verified']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('home', 'AdminController@index')->name('admin.home');
    });
});