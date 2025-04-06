@extends('layouts.app')

@section('title', 'Département Financier & Comptabilité')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Département Financier & Comptabilité</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/management/etudes-techniques') }}">Management</a></li>
                <li class="breadcrumb-item active text-primary">Financier & Comptabilité</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Financier & Comptabilité Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <!-- Introduction -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 900px;">
                <h4 class="text-primary text-uppercase">Département Financier & Comptabilité</h4>
                <h1 class="display-5 mb-4 fw-bold">
                    <i class="fas fa-coins text-primary me-2"></i> Performance Financière & Transparence Comptable
                </h1>
                <p class="lead text-muted mb-0">
                    Le département Financier & Comptabilité de <strong>BTP Consulting</strong> assure la rigueur comptable, la bonne gestion budgétaire et le suivi financier des projets pour garantir la santé financière de l’entreprise.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4 justify-content-center">
                <!-- 1. Comptabilité Générale & Analytique -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-calculator"></i>
                            <h3>Comptabilité Générale & Analytique</h3>
                        </div>
                        <p class="service-description">
                            Tenue des comptes, analyse des coûts, et production des états financiers fiables pour une gestion éclairée.
                        </p>
                    </div>
                </div>

                <!-- 2. Gestion Budgétaire & Suivi des Projets -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-chart-line"></i>
                            <h3>Budgets & Projets</h3>
                        </div>
                        <p class="service-description">
                            Élaboration des budgets prévisionnels, suivi rigoureux des dépenses par projet, et analyse des écarts.
                        </p>
                    </div>
                </div>

                <!-- 3. Trésorerie & Relations Bancaires -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-university"></i>
                            <h3>Trésorerie & Banques</h3>
                        </div>
                        <p class="service-description">
                            Gestion des flux de trésorerie, optimisation des relations bancaires et suivi efficace des encaissements et recouvrements.
                        </p>
                    </div>
                </div>

                <!-- 4. Contrôle de Gestion & Audit -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-search-dollar"></i>
                            <h3>Contrôle & Audit</h3>
                        </div>
                        <p class="service-description">
                            Suivi des indicateurs de performance, mise en place de contrôles internes, et réalisation d’audits pour améliorer la gestion.
                        </p>
                    </div>
                </div>

                <!-- 5. Reporting & Fiscalité -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <h3>Reporting & Fiscalité</h3>
                        </div>
                        <p class="service-description">
                            Production de rapports financiers fiables et conformité aux obligations fiscales locales et internationales.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.7s">
                <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fas fa-envelope me-2"></i> Contactez notre service financier
                </a>
            </div>
        </div>
    </div>
    <!-- Financier & Comptabilité End -->

    <!-- Styles CSS -->
    <style>
        .bg-light {
            background-color: #f8f9fa;
        }

        .lead {
            font-size: 1.25rem;
            line-height: 1.6;
        }

        .service-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

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

        .service-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin: 0;
            flex-grow: 1;
        }

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
