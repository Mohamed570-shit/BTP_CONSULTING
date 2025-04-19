@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nos Valeurs</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Nos Valeurs</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Nos Valeurs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Nos Valeurs</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-star text-primary me-2"></i> Les Valeurs qui Nous Définissent
                </h1>
                <p class="mb-0">
                    Chez <strong>BTP Consulting</strong>, nous plaçons nos clients et partenaires au cœur de nos préoccupations, en nous appuyant sur des valeurs d’excellence et de responsabilité pour garantir des projets d’ingénierie de qualité.
                </p>
            </div>
            <div class="row g-4">
                @foreach([
                    ['icon' => 'balance-scale', 'title' => 'Éthique', 'text' => 'Nous cultivons une culture d’intégrité et de transparence pour mériter la confiance de nos clients et partenaires dans chaque projet d’ingénierie.', 'delay' => '0.2s'],
                    ['icon' => 'users', 'title' => 'Esprit d’équipe', 'text' => 'La réussite de nos projets repose sur la collaboration et l’engagement de nos équipes, mobilisées pour offrir des solutions techniques optimales.', 'delay' => '0.4s'],
                    ['icon' => 'smile', 'title' => 'Satisfaction Client', 'text' => 'Nous nous engageons à fournir des solutions d’ingénierie qui répondent aux attentes de nos clients en termes de qualité, de coût et de délais.', 'delay' => '0.6s'],
                    ['icon' => 'chart-line', 'title' => 'Performance', 'text' => 'Grâce à une maîtrise des techniques modernes et une gestion rigoureuse, nous assurons des performances élevées dans nos diagnostics et études techniques.', 'delay' => '0.2s'],
                    ['icon' => 'leaf', 'title' => 'Développement Durable', 'text' => 'Nous intégrons des pratiques durables dans nos projets, de l’étude à la réalisation, pour préserver l’environnement et assurer un avenir responsable.', 'delay' => '0.4s'],
                    ['icon' => 'lightbulb', 'title' => 'Innovation', 'text' => 'Nous recherchons constamment des solutions innovantes pour optimiser nos diagnostics structurels et répondre aux défis de l’ingénierie moderne.', 'delay' => '0.6s']
                ] as $value)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ $value['delay'] }}">
                        <div class="value-item text-center p-4 bg-light rounded shadow-sm">
                            <i class="fas fa-{{ $value['icon'] }} fa-3x text-primary mb-3"></i>
                            <h3>{{ $value['title'] }}</h3>
                            <p>{{ $value['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Nos Valeurs End -->

    <!-- Style CSS personnalisé -->
    <style>
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop'); /* Image de fond professionnelle */
            background-size: cover;
            background-position: center;
            min-height: 300px;
            display: flex;
            align-items: center;
        }

        .value-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: #ffffff;
            border-radius: 10px;
            min-height: 300px; /* Hauteur uniforme */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .value-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
        }

        .value-item i {
            color: #ff6200;
        }

        .value-item h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .value-item p {
            font-size: 1rem;
            color: #6c757d;
        }

        .text-primary {
            color: #ff6200 !important;
        }

        @media (max-width: 768px) {
            .bg-breadcrumb {
                min-height: 200px;
            }
            .value-item {
                min-height: 250px;
            }
        }
    </style>
@endsection
