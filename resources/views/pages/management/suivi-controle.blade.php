@extends('layouts.app')

@section('title', 'Département Suivi & Contrôle des Travaux')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Suivi & Contrôle des Travaux</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/management/etudes-techniques') }}">Management</a></li>
                <li class="breadcrumb-item active text-primary">Suivi & Contrôle</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Suivi & Contrôle Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <!-- Introduction -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 900px;">
                <h4 class="text-primary text-uppercase">Département Suivi & Contrôle des Travaux</h4>
                <h1 class="display-5 mb-4 fw-bold">
                    <i class="fas fa-cogs text-primary me-2"></i> Gestion Rigoureuse des Projets
                </h1>
                <p class="lead text-muted mb-0">
                    Le département Suivi & Contrôle des Travaux de <strong>BTP Consulting</strong> assure une supervision complète, garantissant la qualité, la sécurité et le respect des délais pour des chantiers performants et conformes.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                <!-- 1. Service OPC -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-calendar-alt"></i>
                            <h3>Ordonnancement, Pilotage, Coordination (OPC)</h3>
                        </div>
                        <ul class="service-list">
                            <li>Élaboration et suivi précis des plannings (Gantt, Pert, Primavera, MS Project).</li>
                            <li>Coordination et pilotage opérationnel des intervenants.</li>
                            <li>Gestion proactive des délais et interfaces techniques.</li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Service Supervision & Contrôle Qualité -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-tools"></i>
                            <h3>Supervision, Contrôle Qualité & Assistance</h3>
                        </div>
                        <ul class="service-list">
                            <li>Supervision technique permanente des chantiers.</li>
                            <li>Contrôle approfondi de conformité aux normes.</li>
                            <li>Assistance technique aux maîtres d’ouvrage.</li>
                            <li>Reporting régulier et gestion des anomalies.</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Service Sécurité & Prévention -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-exclamation-triangle"></i>
                            <h3>Sécurité & Prévention des Risques</h3>
                        </div>
                        <ul class="service-list">
                            <li>Plans sécurité chantier (PPSPS) et suivi.</li>
                            <li>Évaluation et prévention des risques professionnels.</li>
                            <li>Formations sécurité et audits sur chantier.</li>
                        </ul>
                    </div>
                </div>

                <!-- 4. Service Paiement & Facturation -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-credit-card"></i>
                            <h3>Paiement & Facturation</h3>
                            <span class="badge bg-primary ms-2">Nouveau</span>
                        </div>
                        <ul class="service-list">
                            <li>Validation des attachements et situations de travaux.</li>
                            <li>Gestion des décomptes provisoires et définitifs.</li>
                            <li>Suivi des paiements et reporting financier.</li>
                            <li>Gestion des réclamations administratives.</li>
                        </ul>
                    </div>
                </div>

                <!-- 5. Réception Technique & Expertise -->
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-check-circle"></i>
                            <h3>Réception Technique & Expertise</h3>
                        </div>
                        <ul class="service-list">
                            <li>Réceptions provisoires et définitives.</li>
                            <li>Diagnostic technique post-construction.</li>
                            <li>Assistance SAV et formation des utilisateurs.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.7s">
                <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fas fa-envelope me-2"></i> Contactez-nous pour un Suivi Expert
                </a>
            </div>
        </div>
    </div>
    <!-- Suivi & Contrôle End -->

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
            min-height: 320px; /* Hauteur minimale uniforme */
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
            flex-wrap: wrap;
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
            flex-grow: 1;
        }

        .service-header .badge {
            font-size: 0.8rem;
            padding: 5px 10px;
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
            margin-bottom: 10px;
            font-size: 1rem;
            color: #333;
            line-height: 1.5;
        }

        .service-list li:before {
            content: "\f058"; /* FontAwesome circle-check icon */
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #ff6200;
            font-size: 1.1rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .service-card {
                min-height: auto; /* Remove fixed height on smaller screens */
            }

            .service-header h3 {
                font-size: 1.3rem;
            }

            .service-list li {
                font-size: 0.95rem;
            }
        }
    </style>
@endsection