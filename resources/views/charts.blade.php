@extends ('layouts.app')
@section('title', 'Laravel-Cookbook | Charts')
@section('content')
    <div class="bg-white rounded-md border my-8 px-6 py-6 mx-40">
        <div>
            <h2 class="text-2xl font-semibold">Charts</h2>
            <div class="my-6">
                <div>Last Year: {{ array_sum($lastYearOrders)}}</div>
                <div>Last Year: {{ array_sum($thisYearOrders)}}</div>
            </div>
            <div class="mt-4"><canvas id="myChart"></canvas></div>
            {{-- {{ json_encode($thisYearOrders) }} --}}
            {{-- <livewire:chart-orders /> --}}
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('myChart');

            const lables = ['Jan', 'Feb', 'Mar', 'Apr', 'May', ' Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: lables,
                    datasets: [{
                        label: 'Last Year Orders',
                        backgroundColor: 'lightgray',
                        data: {{ Js::from($lastYearOrders) }},
                        borderWidth: 1
                    },{
                        label: 'This year Orders',
                        backgroundColor: 'lightgreen',
                        data: {{ Js::from($thisYearOrders) }},
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'x',
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endpush
@endsection
