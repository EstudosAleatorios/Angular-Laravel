<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/fazeres', function () {
    return \App\Fazer::all();
});

Route::post('/fazeres', function(){
    return \App\Fazer::create(\Illuminate\Support\Facades\Input::all());
});

Route::any('/fazeres/{id}', function($id){
    return \App\Fazer::where('id', $id)->update(['Feito'=>1]);
});
