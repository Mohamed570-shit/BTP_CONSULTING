@extends('layouts.app')

@section('title', 'Chiffres Clés')

@section('content')
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Chiffres Clés</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/qui-sommes-nous/apropos') }}">Qui Sommes-Nous</a></li>
                <li class="breadcrumb-item active text-orange">Chiffres Clés</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Chiffres Clés Section -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Titre et Description -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-orange">Chiffres Clés</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-chart-bar text-orange me-2"></i> Nos Réalisations en Chiffres
                </h1>
                <p class="mb-0">
                    Chez <strong>BTP Consulting</strong>, nos chiffres témoignent de notre engagement et de notre expertise dans le domaine de l’ingénierie et du diagnostic structurel.
                </p>
            </div>
            <!-- Grille des Statistiques -->
            <div class="row g-4">
            <div class="row g-4">
                @php $delay = 0.2; @endphp
                @foreach($chiffres as $chiffre)
                    <div class="col-md-4 col-lg-2-4 stats-item-container wow fadeInUp" data-wow-delay="{{ number_format($delay, 1) }}s">
                        <div class="stats-item">
                            <i class="fas fa-{{ $chiffre->icon }} text-orange"></i>
                            <h3 data-count="{{ preg_replace('/\D/', '', $chiffre->value) }}">0{{ preg_replace('/[0-9]/', '', $chiffre->value) ?: '+' }}</h3>
                            <p>{{ $chiffre->label }}</p>
                        </div>
                    </div>
                    @php $delay += 0.2; @endphp
                @endforeach
            </div>


    <!-- Styles CSS -->
    <style>
        /* Background Header with BTP Consulting Logo */
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('asset/img/img3.jpg')}}');
            background-size: cover;
            background-position: center;
            min-height: 300px;
            display: flex;
            align-items: center;
        }

        /* Orange Color */
        .text-orange {
            color: #ff6200 !important;
        }

        /* Style des éléments statistiques */
        .stats-item-container {
            flex: 1;
            min-width: 200px;
        }

        .stats-item {
            text-align: center;
            padding: 25px;
            background: linear-gradient(to bottom right, #ffffff, #f0f4f8);
            border-radius: 16px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            box-shadow: 0 10px 20px rgba(255, 98, 0, 0.1);
            border: 1px solid #e0e0e0;
            min-height: 220px;
        }

        /* Effet au survol */
        .stats-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(255, 98, 0, 0.2);
        }

        /* Icônes */
        .stats-item i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            background-color: #fff3e6;
            padding: 15px;
            border-radius: 50%;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .stats-item:hover i {
            transform: scale(1.2) rotate(5deg);
        }

        /* Chiffres */
        .stats-item h3 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2a50ce;
            margin: 15px 0 10px;
        }

        /* Texte descriptif */
        .stats-item p {
            font-size: 1rem;
            color: #555;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .bg-breadcrumb {
                min-height: 250px;
            }

            .stats-item {
                padding: 20px;
                min-height: 200px;
            }

            .stats-item h3 {
                font-size: 2rem;
            }

            .stats-item p {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .bg-breadcrumb {
                min-height: 200px;
            }

            .stats-item {
                padding: 15px;
                min-height: 180px;
            }

            .stats-item h3 {
                font-size: 1.8rem;
            }

            .stats-item p {
                font-size: 0.9rem;
            }

            .stats-item i {
                font-size: 2rem;
            }
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
