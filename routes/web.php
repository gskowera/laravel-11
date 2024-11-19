<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/environments', function () {
    $environments = Config::get('app');

    return view('environments', [
        'environments' => $environments,
    ]);
});
