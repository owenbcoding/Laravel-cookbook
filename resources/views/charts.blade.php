@extends ('layouts.app')
@section('title', 'Laravel-Cookbook | Charts')
@section('content')
    <div class="bg-white rounded-md border my-8 px-6 py-6 mx-40">
        <div>
            <h2 class="text-2xl font-semibold">Charts</h2>
            <div class="mt-4"><canvas id="myChart"></canvas></div>
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
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }, {
                        label: 'This year Orders',
                        backgroundColor: 'lightgray',
                        data: [12, 19, 3, 5, 2, 3],
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
