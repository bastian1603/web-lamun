<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
   return view('admin/dashboard'); 
});

Route::get('/upload_pic', function () {
   return view('admin/upload_pic'); 
});