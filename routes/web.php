<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/charts', function () {
    return view('charts');
});
