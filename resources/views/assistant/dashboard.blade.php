@extends('layouts.assistance')

@section('title', 'Tableau de Bord Assistant')

@section('content')
<style>
    body {
        background: #f4f6f9;
        font-family: 'Poppins', sans-serif;
    }

    .dashboard-container {
        padding: 50px 20px;
    }

    .card-box {
        background: #fff;
        border-left: 5px solid #ff6200;
        border-radius: 10px;
        padding: 25px 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        transition: all 0.3s ease-in-out;
        text-align: center;
    }

    .card-box:hover {
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        transform: translateY(-5px);
    }

    .card-icon {
        font-size: 2.5rem;
        color: #ff6200;
        margin-bottom: 10px;
    }

    .card-title {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 5px;
    }

    .card-number {
        font-size: 2rem;
        color: #111;
        font-weight: bold;
    }

    .chart-container {
        margin-top: 40px;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
</style>

<div class="container dashboard-container">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-tachometer-alt me-2"></i> Tableau de Bord Assistant</h1>
        <span class="text-muted">Dernière mise à jour : {{ now()->format('d/m/Y H:i') }}</span>
    </div>

    <!-- Projects Card -->
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card-box">
                <div class="card-icon"><i class="fas fa-project-diagram"></i></div>
                <div class="card-title">Projets</div>
                <div class="card-number">{{ $totalProjects }}</div>
            </div>
        </div>
    </div>

    <!-- Chart -->
    <div class="chart-container mt-5">
        <h4 class="mb-4">Statistiques des Projets</h4>
        <canvas id="dashboardChart"></canvas>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('dashboardChart').getContext('2d');
        const dashboardChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Projets'],
                datasets: [{
                    label: 'Total',
                    data: [{{ $totalProjects }}],
                    backgroundColor: ['#3498db'],
                    borderRadius: 8,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Nombre Total de Projets'
                    }
                }
            }
        });
    </script>
@endpush
@endsection
