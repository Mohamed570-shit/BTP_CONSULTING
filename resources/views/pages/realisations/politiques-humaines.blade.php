
@extends('layouts.app')

@section('title', 'Politique Ressources Humaines')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Politique Ressources Humaines</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/qui-sommes-nous') }}">Qui Sommes-Nous</a></li>
                <li class="breadcrumb-item active text-primary">Politique Ressources Humaines</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Politique RH Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Introduction avec Image -->
            <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-6">
                    <h4 class="text-primary mb-3">Politique Ressources Humaines</h4>
                    <h1 class="display-5 mb-4">Investir dans Nos Talents</h1>
                    <p class="lead text-muted mb-4">
                        Chez <strong>BTP Consulting</strong>, nos collaborateurs sont la clé de notre succès. Nous nous engageons à créer un environnement où chaque talent peut s’épanouir, innover et contribuer à des projets d’ingénierie d’excellence.
                    </p>

                </div>
                <div class="col-lg-6">
                    <img src="https://i.pinimg.com/736x/10/4d/12/104d12cb3ccc6d0b1db97a88d48d3a08.jpg" class="img-fluid rounded" alt="Équipe BTP Consulting">
                </div>
            </div>

            <!-- Section Recrutement -->
            <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-6 order-lg-2">
                    <h2 class="mb-3">Recrutement</h2>
                    <p class="text-muted mb-4">
                        Nous attirons les meilleurs talents grâce à un processus de recrutement transparent et inclusif, valorisant la diversité et les compétences.
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Évaluation basée sur les compétences et les valeurs</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Opportunités pour tous les profils</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Intégration soignée des nouveaux collaborateurs</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="img-fluid rounded" alt="Recrutement BTP Consulting">
                </div>
            </div>

            <!-- Section Développement -->
            <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-6">
                    <h2 class="mb-3">Développement Professionnel</h2>
                    <p class="text-muted mb-4">
                        Nous investissons dans la croissance de nos équipes avec des formations continues et des parcours de carrière personnalisés.
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Programmes de formation à la pointe</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Mentorat et accompagnement</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Opportunités d’évolution interne</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="https://i.pinimg.com/736x/a3/24/f7/a324f7efc80f75106bef9dddd8993b17.jpg" class="img-fluid rounded" alt="Formation BTP Consulting">
                </div>
            </div>

            <!-- Section Bien-être -->
            <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-lg-6 order-lg-2">
                    <h2 class="mb-3">Bien-être au Travail</h2>
                    <p class="text-muted mb-4">
                        Nous favorisons un environnement sain et motivant, où l’équilibre et la collaboration sont au cœur de notre culture.
                    </p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Horaires flexibles</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Initiatives pour le bien-être</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Culture de respect et reconnaissance</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" class="img-fluid rounded" alt="Bien-être BTP Consulting">
                </div>
            </div>

            <!-- Call to Action Final -->

        </div>
    </div>
    <!-- Politique RH End -->

    <!-- Styles CSS -->
    <style>
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/c3/2d/3e/c32d3e594075dd1a07266a8334a840ad.jpg'); /* Remplacez par votre image */
            background-size: cover;
            background-position: center;
        }
        h1.display-5 {
            font-size: 3rem;
            font-weight: 700;
            color: #333;
        }
        h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #333;
        }
        p.lead {
            font-size: 1.25rem;
            line-height: 1.6;
        }
        .btn-primary {
            background-color: #ff6200;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        img.rounded {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        img.rounded:hover {
            transform: scale(1.02);
        }
        .list-unstyled li {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #666;
        }
        .list-unstyled i {
            color: #007bff;
        }
        /* Responsive */
        @media (max-width: 992px) {
            h1.display-5 {
                font-size: 2.5rem;
            }
            h2 {
                font-size: 2rem;
            }
            p.lead {
                font-size: 1.1rem;
            }
            .row.align-items-center {
                text-align: center;
            }
            .row.align-items-center img {
                margin-top: 20px;
            }
            .order-lg-1, .order-lg-2 {
                order: 0; /* Réorganiser pour mobile */
            }
        }
        @media (max-width: 576px) {
            h1.display-5 {
                font-size: 2rem;
            }
            h2 {
                font-size: 1.8rem;
            }
            .btn-primary {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
@endsection
