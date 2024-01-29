<?php

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/stats', function () {
    $usersCount = User::where('created_at', '>', now()->subMonth(30))->count();
    $ordersCount = Order::where('created_at', '>', now()->subMonth(30))->count();
    $revenue = Order::where('created_at', '>', now()->subMonth(30))->count('total');
    return view('stats', [
        'usersCount' => $usersCount,
        'ordersCount' => $ordersCount,
        'revenue' => $revenue,
    ]);
});