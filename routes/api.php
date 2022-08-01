<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ApartmentRoomController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
//     Route::post('/register', [UserController::class, 'register']);
//     Route::post('/login',  [UserController::class, 'login']);
//     Route::post('/logout',  [UserController::class, 'logout']);

//     Route::post('/refresh', [UserController::class, 'refresh']);
//     Route::get('/user-profile', [UserController::class, 'userProfile']);
// });

// Route::group(['middleware' => ['jwt.verify']], function () {
//     Route::group(['prefix' => 'apartment'], function () {
//         Route::get('/list', [ApartmentController::class, 'listApartment']);
//         Route::post('/add', [ApartmentController::class, 'create']);
//         Route::post('/edit/{id}', [ApartmentController::class, 'edit']);
//         Route::get('/find/{id}', [ApartmentController::class, 'findById']);
//         Route::delete('/delete/{id}', [ApartmentController::class, 'destroy']);
//         Route::get('/search', [ApartmentController::class, 'search']);
//     });
    
//     Route::group(['prefix' => 'apartment-room'], function () {
//         Route::get('/detail/{id}', [ApartmentRoomController::class, '']);
//         Route::get('/list', [ApartmentRoomController::class, 'listApartmentRoom']);
//         Route::post('/add', [ApartmentRoomController::class, 'store']);
//         Route::post('/edit/{id}', [ApartmentRoomController::class, 'update']);
//         Route::delete('/delete/{id}', [ApartmentRoomController::class, 'destroy']);
//         Route::get('/search', [ApartmentRoomController::class, 'search']);
//     });

//     // Route::group(['prefix' => ''])
// });

Route::post('login',  [UserController::class, 'login']);
Route::post('register',  [UserController::class, 'register']);
Route::post('logout',  [UserController::class, 'logout']);
Route::get('/fetch-user',  [UserController::class, 'fetUser']);

Route::post('email/verification-notification', [EmailVerificationController::class, 'reSendVerificationEmail']);
Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verificationEmail'])->name('verification.verify');
  
// Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth:sanctum');
// Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify')->middleware('auth:sanctum');

// apartment
Route::group(['prefix' => 'apartment'], function () {
  Route::get('/list', [ApartmentController::class, 'listApartment']);
  Route::post('/add', [ApartmentController::class, 'create']);
  Route::post('/edit/{id}', [ApartmentController::class, 'edit']);
  Route::get('/find/{id}', [ApartmentController::class, 'findById']);
  Route::delete('/delete/{id}', [ApartmentController::class, 'destroy']);
  Route::get('/search', [ApartmentController::class, 'search']);
});
 
Route::group(['prefix' => 'apartment-room'], function () {
  Route::get('/list', [ApartmentRoomController::class, 'listRoom']);
  Route::post('/add', [ApartmentRoomController::class, 'create']);
  Route::post('/edit/{id}', [ApartmentRoomController::class, 'editRoom']);
  Route::post('/edit-room-user/{id}', [ApartmentRoomController::class, 'editRoomUser']);
  Route::get('/find/{id}', [ApartmentRoomController::class, 'findRoomById']);
  Route::delete('/delete/{id}', [ApartmentRoomController::class, 'destroy']);
  Route::get('/search', [ApartmentRoomController::class, 'search']);
});