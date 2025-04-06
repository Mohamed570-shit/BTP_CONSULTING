@extends('layouts.app')

@section('title', 'Département Développement Commercial & Marketing')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Développement Commercial & Marketing</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/management/etudes-techniques') }}">Management</a></li>
                <li class="breadcrumb-item active text-primary">Commercial & Marketing</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Développement Commercial & Marketing Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <!-- Introduction -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 900px;">
                <h4 class="text-primary text-uppercase">Département Développement Commercial</h4>
                <h1 class="display-5 mb-4 fw-bold">
                    <i class="fas fa-bullhorn text-primary me-2"></i> Stratégie & Relation Client
                </h1>
                <p class="lead text-muted mb-0">
                    Le Département Développement Commercial & Marketing pilote la stratégie commerciale, développe des partenariats durables et assure la visibilité de BTP Consulting sur les marchés nationaux et internationaux.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4 justify-content-center">
                <!-- 1. Appels d'Offres -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-file-signature"></i>
                            <h3>Appels d’Offres</h3>
                        </div>
                        <p class="service-description">
                            Coordination de la veille, préparation et soumission des offres dans le respect des exigences réglementaires.
                        </p>
                    </div>
                </div>

                <!-- 2. Développement Clients -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-handshake"></i>
                            <h3>Fidélisation Clients</h3>
                        </div>
                        <p class="service-description">
                            Création de relations solides avec les clients, suivi de leur satisfaction et accompagnement personnalisé.
                        </p>
                    </div>
                </div>

                <!-- 3. Marketing Digital -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-chart-line"></i>
                            <h3>Marketing Digital</h3>
                        </div>
                        <p class="service-description">
                            Communication multicanal, stratégie de contenu, présence sur les réseaux sociaux et campagnes ciblées.
                        </p>
                    </div>
                </div>

                <!-- 4. Partenariats Stratégiques -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-users-cog"></i>
                            <h3>Relations Institutionnelles</h3>
                        </div>
                        <p class="service-description">
                            Développement de partenariats durables avec les institutions et acteurs clés du secteur.
                        </p>
                    </div>
                </div>

                <!-- 5. Référencement & Certification -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-card">
                        <div class="service-header">
                            <i class="fas fa-certificate"></i>
                            <h3>Certification Institutionnelle</h3>
                        </div>
                        <p class="service-description">
                            Suivi des procédures de référencement et obtention de certifications pour renforcer la crédibilité de l'entreprise.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.7s">
                <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fas fa-envelope me-2"></i> Contactez le service Commercial
                </a>
            </div>
        </div>
    </div>
    <!-- Développement Commercial & Marketing End -->
@endsection
