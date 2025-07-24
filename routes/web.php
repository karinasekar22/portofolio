<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('partials.hero');
});

Route::get('/about', function () {
    return view('partials.about');
});

Route::get('/project', function () {
    return view('partials.project');
});
