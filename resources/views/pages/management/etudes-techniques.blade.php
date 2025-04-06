@extends('layouts.app')

@section('title', 'Département Études Techniques')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Département Études Techniques</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/management/etudes-techniques') }}">Management</a></li>
                <li class="breadcrumb-item active text-primary">Études Techniques</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Études Techniques Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <!-- Introduction -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 900px;">
                <h4 class="text-primary text-uppercase">Département Études Techniques</h4>
                <h1 class="display-5 mb-4 fw-bold">
                    <i class="fas fa-wrench text-primary me-2"></i> Excellence et Innovation en Ingénierie
                </h1>
                <p class="lead text-muted mb-0">
                    Le département Études Techniques de <strong>BTP Consulting</strong> regroupe une expertise multidisciplinaire pour concevoir des solutions techniques avancées, durables et adaptées aux projets les plus exigeants.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                <!-- 1. Service Structures & Ingénierie Civile -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-building"></i>
                            <h3>Structures & Ingénierie Civile</h3>
                        </div>
                        <ul class="service-list">
                            <li>Conception technique, études parasismiques, réhabilitation et renforcement des bâtiments et structures.</li>
                            <li>Études détaillées en béton armé et charpentes spéciales (Eurocode, RPS2011), structures complexes.</li>
                            <li>Ouvrages souterrains.</li>
                            <li>Ponts, viaducs, passerelles et autres ouvrages d’art.</li>
                            <li>Investigations géotechniques, fondations spéciales, stabilisation des terrains.</li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Service Ingénierie Hydraulique -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-tint"></i>
                            <h3>Ingénierie Hydraulique</h3>
                        </div>
                        <ul class="service-list">
                            <li>Études des réseaux d’assainissement et drainage urbain, bassins d’orage.</li>
                            <li>Conception de STEP innovantes, recyclage et réutilisation des eaux épurées.</li>
                            <li>Dimensionnement des réseaux d’eau potable, optimisation hydraulique.</li>
                            <li>Modélisation hydrologique, prévention des crues et gestion des risques.</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Service Environnement & Développement Durable -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-leaf"></i>
                            <h3>Environnement & Développement Durable</h3>
                        </div>
                        <ul class="service-list">
                            <li>Études d’impact environnemental (EIE) et dossiers réglementaires.</li>
                            <li>Audits environnementaux, accompagnement certifications HQE/LEED.</li>
                            <li>Études biodiversité et intégration environnementale des projets.</li>
                        </ul>
                    </div>
                </div>

                <!-- 4. Service Aménagement Rural & Développement Agricole -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-seedling"></i>
                            <h3>Aménagement Rural & Développement Agricole</h3>
                        </div>
                        <ul class="service-list">
                            <li>Études intégrées des territoires ruraux, routes agricoles, bassins collinaires.</li>
                            <li>Conception de périmètres irrigués (PMH) et ouvrages agricoles.</li>
                            <li>Techniques modernes d’irrigation (goutte-à-goutte, micro-aspersion).</li>
                            <li>Gestion et traitement des ressources en eau.</li>
                        </ul>
                    </div>
                </div>

                <!-- 5. Service Infrastructures & Aménagement Urbain -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-city"></i>
                            <h3>Infrastructures & Aménagement Urbain</h3>
                        </div>
                        <ul class="service-list">
                            <li>Conception durable de voiries urbaines et espaces publics.</li>
                            <li>Réseaux électriques (MT/BT) et éclairage intelligent.</li>
                            <li>Évaluation économique, estimation budgétaire des projets.</li>
                            <li>Modélisation BIM et gestion digitale des projets.</li>
                        </ul>
                    </div>
                </div>

                <!-- 6. Service Infrastructures & Mobilité -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-road"></i>
                            <h3>Infrastructures & Mobilité</h3>
                        </div>
                        <ul class="service-list">
                            <li>Dimensionnement des routes classées/non classées, sécurité routière.</li>
                            <li>Études des tramways, réseaux ferroviaires et pôles multimodaux.</li>
                            <li>Dalots, ponts routiers et dispositifs hydrauliques.</li>
                        </ul>
                    </div>
                </div>

                <!-- 7. Service Innovation, IA & Ingénierie Intelligente -->
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-lightbulb"></i>
                            <h3>Innovation, IA & Ingénierie Intelligente</h3>
                        </div>
                        <ul class="service-list">
                            <li>Ingénierie connectée pour Smart Cities et Smart Buildings (IoT, GTB).</li>
                            <li>Éco-conception, optimisation énergétique, bilan carbone.</li>
                            <li>Automatisation des études via IA et plateformes collaboratives.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.9s">
                <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fas fa-envelope me-2"></i> Collaborons sur Votre Projet
                </a>
            </div>
        </div>
    </div>
    <!-- Études Techniques End -->

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
            min-height: 300px; /* Hauteur minimale pour uniformité */
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

        /* Liste des services */
        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            position: relative;
            padding-left: 25px;
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .service-list li:before {
            content: "\f058"; /* Icône FontAwesome "circle-check" */
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #ff6200;
            font-size: 1rem;
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
                min-height: 280px;
            }
            .service-header h3 {
                font-size: 1.4rem;
            }
            .service-header i {
                font-size: 1.8rem;
            }
            .service-list li {
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
            .service-list li {
                font-size: 0.9rem;
                padding-left: 20px;
            }
            .btn-primary {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
@endsection