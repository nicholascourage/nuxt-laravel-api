<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::post('login', function(){
//    return response()->json([
//        'message' => 'Login Success'
//    ]);
//});
