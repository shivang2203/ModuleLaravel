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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminPanelController@index');
});

Route::group( ['middleware' => ['auth','role.check:Admin'] ], function () {

    Route::get('/admin/dashboard', [Modules\AdminPanel\Http\Controllers\DashboardController::class, 'index']);

});
