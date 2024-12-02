<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/worldmap.php', function () {
    return view('worldmap');
});