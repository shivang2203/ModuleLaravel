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

Route::prefix('user')->group(function() {
    Route::get('/', 'UserPanelController@index');
});

Route::group( ['middleware' => ['auth','role.check:User'] ], function () {

    Route::get('/user/dashboard', [Modules\UserPanel\Http\Controllers\DashboardController::class, 'index']);
    
});