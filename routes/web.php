<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/charts', function () {
    $thisYearOrders = Order::query()
        ->whereYear('created_at', date('Y'))
        ->selectRaw('month(created_at) as month')
        ->selectRaw('count(*) as count')
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('count', 'month')
        ->values()
        ->toArray();

    $lastYearOrders = Order::query()
        ->whereYear('created_at', date('Y') -1)
        ->groupByMonth();

    return view('charts', [
        'thisYearOrders' => $thisYearOrders,
        'lastYearOrders' => $lastYearOrders,
    ]);
});
