@extends('layouts.app')

@section('title', 'Chiffres Clés')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Chiffres Clés</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/qui-sommes-nous/apropos') }}">Qui Sommes-Nous</a></li>
                <li class="breadcrumb-item active text-primary">Chiffres Clés</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Chiffres Clés Section -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Titre et Description -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Chiffres Clés</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-chart-bar text-primary me-2"></i> Nos Réalisations en Chiffres
                </h1>
                <p class="mb-0">
                    Chez <strong>BTP Consulting</strong>, nos chiffres témoignent de notre engagement et de notre expertise dans le domaine de l’ingénierie et du diagnostic structurel.
                </p>
            </div>

            <!-- Grille des Statistiques -->
            <div class="row g-4 flex-nowrap">
                <!-- Chiffre d'affaires -->
                <div class="col stats-item-container wow fadeInUp" data-wow-delay="0.2s">
                    <div class="stats-item">
                        <i class="fas fa-money-bill-wave text-primary"></i>
                        <h3 data-count="600">0+ M</h3>
                        <p>Chiffre d'affaires (en millions de dirhams)</p>
                    </div>
                </div>

                <!-- Carnet de commandes -->
                <div class="col stats-item-container wow fadeInUp" data-wow-delay="0.6s">
                    <div class="stats-item">
                        <i class="fas fa-clipboard-check text-primary"></i>
                        <h3 data-count="100">0+ M</h3>
                        <p>Carnet de commandes (en millions de dirhams)</p>
                    </div>
                </div>

                <!-- Projets réalisés -->
                <div class="col stats-item-container wow fadeInUp" data-wow-delay="0.2s">
                    <div class="stats-item">
                        <i class="fas fa-project-diagram text-primary"></i>
                        <h3 data-count="500">0+</h3>
                        <p>Projets réalisés avec succès</p>
                    </div>
                </div>

                <!-- Références -->
                <div class="col stats-item-container wow fadeInUp" data-wow-delay="0.4s">
                    <div class="stats-item">
                        <i class="fas fa-history text-primary"></i>
                        <h3 data-count="300">0+</h3>
                        <p>Références</p>
                    </div>
                </div>

                <!-- Nombre de salariés -->
                <div class="col stats-item-container wow fadeInUp" data-wow-delay="0.6s">
                    <div class="stats-item">
                        <i class="fas fa-users text-primary"></i>
                        <h3 data-count="100">0+</h3>
                        <p>Nombre de salariés mobilisés</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Chiffres Clés Section -->

    <!-- Styles CSS -->
    <style>
        /* Conteneur de la grille */
        .row.flex-nowrap {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            justify-content: space-between;
        }

        /* Conteneur de chaque élément */
        .stats-item-container {
            flex: 1;
            min-width: 200px;
            margin: 0 10px;
        }

        /* Style des éléments statistiques */
        .stats-item {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            transition: transform 0.5s ease;
        }

        /* Effet au survol */
        .stats-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Icônes */
        .stats-item i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #ff6200;
        }

        /* Chiffres */
        .stats-item h3 {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
            margin: 10px 0;
        }

        /* Texte descriptif */
        .stats-item p {
            font-size: 1rem;
            color: #666;
        }
    </style>

    <!-- JavaScript pour l'animation des compteurs -->
    <script>
        function animateCounters() {
            const counters = document.querySelectorAll('.stats-item h3');
            const speed = 200; // Vitesse de l'animation

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-count');
                    const currentText = counter.innerText.replace(/[^0-9]/g, '');
                    const count = +currentText;
                    const suffix = counter.innerText.replace(/[0-9]/g, '').trim();
                    const increment = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment) + suffix;
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = target + suffix;
                    }
                };

                const observer = new IntersectionObserver(entries => {
                    if (entries[0].isIntersecting) {
                        updateCount();
                        observer.disconnect();
                    }
                }, { threshold: 0.5 });

                observer.observe(counter.parentElement);
            });
        }

        document.addEventListener('DOMContentLoaded', animateCounters);
    </script>
@endsection