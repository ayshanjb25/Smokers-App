<?php

use App\Http\Controllers\AboutUsController;
//use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/',[HomeController::class, 'index']);

//Route::get('about-us',[AboutUsController::class, 'index']);

//Route::get('/api/v1/user/create', function(){
 //   return 'Hello User';
//});



//Route::redirect('api', 'sss');

//Route::get('api',function () {
//    return 'redirected route';
//});