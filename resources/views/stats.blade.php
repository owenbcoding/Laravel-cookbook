@extends ('layouts.app')
@section('title', 'Laravel-Cookbook | Charts')
@section('content')
    <div class="grid grid-cols-4 gap-10 mt-6">
        <div class="bg-white shadow-md rounded-lg px-4 py-6">
            <div class="flex justify-between item-center">
                <h4 class="text-gray-500 font-medium">users</h4>
                <select name="selectedDays" id="selectedDays" class="border bg-gray-100">
                    <option value="30">30 days</option>
                    <option value="30">60 days</option>
                    <option value="30">90 days</option>
                </select>
            </div>
            <div class="text-3xl font-bold mt-4">{{ $usersCount }}</div>
        </div>
        <div class="bg-white shadow-md rounded-lg px-4 py-6">
            <h4 class="text-gray-500 font-medium">Orders</h4>
            <div class="text-3xl font-bold mt-4">{{ $ordersCount }}</div>
        </div>
        <div class="bg-white shadow-md rounded-lg px-4 py-6">
            <h4 class="text-gray-500 font-medium">Revenue</h4>
            <div class="text-3xl font-bold mt-4">
                {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($revenue / 100, 'USD') }}</div>
        </div>
    </div>
@endsection
