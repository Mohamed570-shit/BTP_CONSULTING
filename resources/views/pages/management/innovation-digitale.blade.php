@extends('layouts.app')

@section('title', 'Département Innovation & Transition Digitale')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Département Innovation & Transition Digitale</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/management/etudes-techniques') }}">Management</a></li>
                <li class="breadcrumb-item active text-primary">Innovation & Transition Digitale</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Innovation & Transition Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <!-- Introduction -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 900px;">
                <h4 class="text-primary text-uppercase">Département Innovation & Transition Digitale</h4>
                <h1 class="display-5 mb-4 fw-bold">
                    <i class="fas fa-digital-tachograph text-primary me-2"></i> Vers une Ingénierie Numérique Avancée
                </h1>
                <p class="lead text-muted mb-0">
                    Le département Innovation & Transition Digitale de <strong>BTP Consulting</strong> pilote la transformation numérique interne et externe, en intégrant des technologies innovantes pour optimiser nos processus et performances.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4 justify-content-center">
                <!-- 1. Développement Digital Interne -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-laptop-code"></i>
                            <h3>Développement Digital Interne</h3>
                        </div>
                        <p class="service-description">
                            Conception d’applications sur mesure et de tableaux de bord interactifs pour améliorer la gestion interne et la prise de décision en temps réel.
                        </p>
                    </div>
                </div>

                <!-- 2. Automatisation des Processus Métier -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-cogs"></i>
                            <h3>Automatisation des Processus Métier</h3>
                        </div>
                        <p class="service-description">
                            Mise en place de solutions d’automatisation pour rationaliser les workflows, réduire les tâches répétitives et augmenter l’efficacité opérationnelle.
                        </p>
                    </div>
                </div>

                <!-- 3. Sécurité Numérique & Gestion des Données -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Sécurité Numérique & Gestion des Données</h3>
                        </div>
                        <p class="service-description">
                            Sécurisation des systèmes numériques et gestion optimisée des données pour garantir leur intégrité, confidentialité et accessibilité.
                        </p>
                    </div>
                </div>

                <!-- 4. Transformation Digitale & Formation Interne -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h3>Transformation Digitale & Formation Interne</h3>
                        </div>
                        <p class="service-description">
                            Accompagnement des équipes dans la transition digitale via des formations adaptées et des stratégies pour une adoption réussie des outils numériques.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.6s">
                <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fas fa-envelope me-2"></i> Contactez-nous pour une Transition Numérique
                </a>
            </div>
        </div>
    </div>
    <!-- Innovation & Transition End -->

    <!-- Styles CSS -->
    <style>
        /* Fond global */
        .bg-light {
            background-color: #f8f9fa;
        }

        /* Introduction */
        .lead {
            font-size: 1.25rem;
            line-height: 1.6;
        }

        /* Service Card */
        .service-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 250px; /* Hauteur minimale uniforme */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Header du service */
        .service-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ff6200;
            padding-bottom: 10px;
        }

        .service-header i {
            font-size: 2rem;
            color: #ff6200;
            margin-right: 15px;
        }

        .service-header h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #007bff;
            margin: 0;
        }

        /* Description du service */
        .service-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin: 0;
            flex-grow: 1;
        }

        /* Bouton d’action */
        .btn-primary {
            background-color: #007bff;
            border: none;
            font-size: 1.1rem;
            padding: 12px 30px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .service-card {
                padding: 20px;
                min-height: 230px;
            }
            .service-header h3 {
                font-size: 1.4rem;
            }
            .service-header i {
                font-size: 1.8rem;
            }
            .service-description {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .service-card {
                padding: 15px;
                min-height: auto;
            }
            .service-header h3 {
                font-size: 1.3rem;
            }
            .service-header i {
                font-size: 1.6rem;
            }
            .service-description {
                font-size: 0.9rem;
            }
            .btn-primary {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
@endsection