<?php

use App\Models\Users;
use App\Http\Controllers\UserController;
use App\Http\Controllers\testController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
    $post = Users::create([
        'name' => 'aisha' ,
        "date_of_birth"=>"2020-12-22",
        "gender"=>"Female",
        "country"=>"Sri Lanka",
        "mobile"=>"77777777",
        "mobile_verified"=>1,
        "email"=>"aisha@gmail.com",
        "email_verified"=>1,
        "password"=>"secret"]);

        return $post;
});

Route::prefix('v1')->group(function(){
    Route::get('/test', [testController::class, 'test']);
});

Route::prefix('v1')->group(function () {
    Route::apiResource('users', UserController::class);
    
    // Route::get('/users','UserController@index');
    // Route::post('/users','UserController@store');
    // Route::put('/users','UserController@update');
    // Route::delete('/users','UserController@destroy');
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Route::post('/users', 'UserController@saveUsers');

