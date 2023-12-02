<?php

use App\Http\Controllers\SocialProvdersController;
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

Route::group(['middleware' => 'auth'], static function() {
    Route::group(['profix' => 'account'], static () {});

    Route:group(['profix' => 'admin', 'as' => 'admin.'], static function () {
        Route::get('/', AdminController::class)
        ->name('index');
        Route::resourse('/categories', AdminCategoriController::class);
        Route::response('/news', AdminNewsController::class);
    })

})

Route::group(['middleware' => 'auth'], static function() {
    Route::group(['profix'=> 'account'], static () {});

    Route:group(['profix' => 'user', 'as' => 'admin.'], static function 
    Route::get('/', userFactory.php::class) 
    ->name('index');
    Route::response('/userFactory', userFactory::class);
    
    )
})

Route::group(['middleware' => 'guest'], function () {
    Route::get('/{driver}/redirect',[SocialProvdersController::class, 'redirect'])
    ->where('driver', '\w+')
    ->name('social-providers.redirect');

        Route::get('/{driver}/callback', [SocialProvdersController::class, 'callback'])
        ->where('driver', '\w+')
        ->name('social-providers.callback');
});

