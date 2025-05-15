@extends('layouts.admin')

@section('title', 'Dashboard')

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
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card-box">
                <div class="card-icon"><i class="fas fa-briefcase"></i></div>
                <div class="card-title">Offres d'emploi</div>
                <div class="card-number">{{ $totalOffers }}</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box">
                <div class="card-icon"><i class="fas fa-file-signature"></i></div>
                <div class="card-title">Candidatures Spontanées</div>
                <div class="card-number">{{ $totalCandidatures }}</div>
            </div>
        </div>
    </div>

    <div class="chart-container mt-5">
        <h4 class="mb-4">Statistiques des Offres et Candidatures</h4>
        <canvas id="dashboardChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('dashboardChart').getContext('2d');
    const dashboardChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Offres', 'Candidatures'],
            datasets: [{
                label: 'Total',
                data: [
                    {{ $totalOffers }},
                    {{ $totalCandidatures }}
                ],
                backgroundColor: [
                    '#9b59b6',
                    '#e74c3c'
                ],
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
            }
        }
    });
</script>
@endsection
