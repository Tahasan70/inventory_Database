<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\error;
use function Laravel\Prompts\warning;

Route::get('/', function () {
    
    Session::put('name', 'John');
    Session::put('age', 30);
    Session::put('email', 'FVw3K@example.com');
    $name = Session::get('name');
    $age = Session::get('age');
    $email = Session::get('email');
    Session::forget('age');
    Session::forget(['name', 'email']);
    Session::flush();
    return $email;
});


Route::view('/home', 'home');

Route::get('/create-post', function(){
    Log::warning("Post couldn't be created");
    Log::info("Post couldn't be created");
    Log::debug("Post couldn't be created");
    Session::flash('status', 'Post created successfully');
    return redirect('/home');
});