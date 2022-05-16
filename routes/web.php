<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Familytree;
use App\Http\Livewire\Notification;
use App\Http\Livewire\SetupAccount;
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
    // return view('welcome');
    return redirect('login');
});

Auth::routes();
//Google Authentication Routes
Route::get('auth/google', 'SocialController@redirectToGoogle');
Route::get('auth/google/callback', 'SocialController@googleCallback');

// Route::get('/store',function(){
// 	return view('public');
// })->name('store');


Route::group(['middleware' => ['auth', 'verified']], function () {
	
	// Route::get('/step2Complete', 'HomeController@registration')->name('step2Complete');

	Route::get('/setup', [SetupAccount::class, '__invoke'])->name('setup');
});

Route::group(['middleware' => ['auth', 'verified','CheckUserActivation']], function () {

	// Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/product', 'HomeController@index')->name('product');

	
	// Route::get('/product', Products::class)->name('product');
	// Route::get('/product/create', 'HomeController@index')->name('product.create');\
	Route::get('/explore', 'HomeController@index')->name('explore');
	// Route::get('/notinotificationfication', 'HomeController@index')->name('notification');
	Route::get('/setting', 'HomeController@index')->name('setting');
	Route::get('/laporan', 'HomeController@laporan')->name('laporan');
	Route::get('/bootstrap', 'HomeController@index')->name('bootstrap');
	// Route::get('/profile', 'HomeController@index')->name('profile');

	Route::get('/booking', 'HomeController@index')->name('booking');
	// Route::get('/familytree', 'HomeController@index')->name('familytree');


	Route::get('/home', [Dashboard::class, '__invoke'])->name('home');
	Route::get('/profile', [Profile::class, '__invoke'])->name('profile');
	Route::get('/familytree', [Familytree::class, '__invoke'])->name('familytree');
	Route::get('/notification', [Notification::class, '__invoke'])->name('notification');

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

    Route::prefix('user-management')->group(function () {
        Route::get('user', 'UserController@index');
        Route::any('user/data', 'UserController@data');

    	Route::get('admin', 'AdminController@index');
    	Route::any('admin/data', 'AdminController@data');

        Route::group(['prefix' => 'agent','namespace'=>'Agent'], function () {
            Route::get('/','\App\Http\Controllers\Agent\AgentController@index')->name('agent.index');
        });
        Route::group(['prefix' => 'customer','namespace'=>'Customer'], function () {
            Route::get('/','\App\Http\Controllers\Customer\CustomerController@index')->name('customer.index');
        });
    	Route::get('role', 'RoleController@index');
    	Route::get('permission', 'PermissionController@index');
    });
});