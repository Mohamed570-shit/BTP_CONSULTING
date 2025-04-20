@extends('layouts.admin')

@section('title', 'Tableau de Bord')

@section('content')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fa;
            color: #2c3e50;
        }

        .dashboard-hero {
            background: linear-gradient(rgba(23, 63, 237, 0.8), rgba(245, 242, 242, 0.6)), url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhqgNr11sC0b_0blo77r7Ac-P_aZanZ5t81YSikUZ2EZJbDvxghfcflyLjn7Qdx1grgaOrYatnzTTA83CgLqU5Y8o9it0e3VW4CemeYUwT4_FaPLv_hssCI_EfsCNtqn6BzGSmYskUIQwoh_lydOJj_PkUObbaekmqWEhFxkxOMGRDihJv0yDeyzEu0Nnia/w640-h452/320877531_531190179061489_1131521077231121851_n%20(1)(1).png') no-repeat center center/cover;
            color: white;
            padding: 60px 0;
            text-align: center;
            border-bottom: 4px solid #ff6200;
        }

        .dashboard-hero h1 {
            font-size: 2.8rem;
            font-weight: bold;
        }

        .dashboard-hero p {
            font-size: 1.2rem;
            margin-top: 10px;
            color: #e0e0e0;
        }

        .stats-section {
            padding: 40px 0;
        }

        .stats-card {
            background: #ffffff;
            border-left: 6px solid #173fed;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
            padding: 25px;
            border-radius: 12px;
            transition: 0.3s;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .stats-icon {
            font-size: 2rem;
            color: #173fed;
            margin-bottom: 10px;
        }

        .stats-title {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .stats-number {
            font-size: 2rem;
            font-weight: bold;
        }

        .charts-section {
            padding: 40px 0;
        }

        .chart-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            height: 350px;
        }
    </style>

    <!-- Hero Header -->
    <section class="dashboard-hero">
        <div class="container">
            <h1>Bienvenue sur le Tableau de Bord</h1>
            <p>Suivez les indicateurs clés de performance de BTP Consulting</p>
        </div>
    </section>

    <!-- Statistiques -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="stats-card text-center">
                        <div class="stats-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stats-title">Utilisateurs</div>
                        <div class="stats-number">245</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stats-card text-center">
                        <div class="stats-icon text-warning">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="stats-title">Projets</div>
                        <div class="stats-number">37</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stats-card text-center">
                        <div class="stats-icon text-success">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="stats-title">offre d'emploi</div>
                        <div class="stats-number">92</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stats-card text-center">
                        <div class="stats-icon text-danger">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="stats-title">condidateure spontaner</div>
                        <div class="stats-number">124</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Graphiques -->
    <section class="charts-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="chart-card">
                        <h5 class="mb-3">Évolution des utilisateurs</h5>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="chart-card">
                        <h5 class="mb-3">Répartition des projets</h5>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FontAwesome + Chart.js -->
    <script src="https://kit.fontawesome.com/a2d9d6d6e4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <!-- Graphiques Script -->
    <script>
        const lineChart = new Chart(document.getElementById('lineChart'), {
            type: 'line',
            data: {
                labels: ['Nov', 'Déc', 'Jan', 'Fév', 'Mars', 'Avr'],
                datasets: [{
                    label: 'Utilisateurs',
                    data: [100, 130, 150, 170, 180, 200],
                    borderColor: '#173fed',
                    backgroundColor: 'rgba(23, 63, 237, 0.1)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                }
            }
        });

        const pieChart = new Chart(document.getElementById('pieChart'), {
            type: 'doughnut',
            data: {
                labels: ['Actifs', 'Terminés', 'En pause'],
                datasets: [{
                    data: [55, 30, 15],
                    backgroundColor: ['#173fed', '#ff6200', '#bdc3c7']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });
    </script>
@endsection
