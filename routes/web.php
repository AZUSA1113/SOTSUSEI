<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\DokokoHomeController;
use App\Http\Controllers\DokokoLoginController;
use App\Http\Controllers\DokokoMemberRegisterController;
use App\Http\Controllers\DokokoLoginHomeController;
use App\Http\Controllers\DokokoFoundRegisterController;
use App\Http\Controllers\FindingController;



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

// Route::get('/', function () {
//     return view('/DokokoHome');
// });

// Route::get('test', [testController::class, 'test']);

Route::get('/', [DokokoHomeController::class, '__inovoke']);

Route::get('DokokoHome', [DokokoHomeController::class, '__inovoke']);

Route::get('DokokoHome/search{keyword?}', [DokokoHomeController::class, 'DokokoSearch']);

Route::get('DokokoLogin', [DokokoLoginController::class, 'DokokoLogin']);

// Route::get('DokokoMemberRegister', [DokokoMemberRegisterController::class, 'DokokoMemberRegister']);

// Route::get('DokokoLoginHome', [DokokoLoginHomeController::class, 'DokokoLoginHome']);

Route::group(['middleware' => 'auth'], function () {
    // この中に認証済み後のルート定義を入れる
    Route::get('DokokoFoundRegister', [DokokoFoundRegisterController::class, 'DokokoFoundRegister']);

});

Route::post('finding/store', [FindingController::class, 'FindingStore']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
