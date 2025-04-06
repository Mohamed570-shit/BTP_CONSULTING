
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">À Propos de Nous</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">À Propos de Nous</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        
        <!-- Abvout Start -->
<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Section Texte -->
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">À Propos de Nous</h4>
                    <h1 class="display-5 mb-4">Découvrez BTP CONSULTING, votre partenaire en ingénierie</h1>

                    <!-- Qui Sommes-Nous -->
                    <div class="mb-4">
                        <h3 class="mb-3">
                            <i class="fas fa-building text-primary me-2"></i> Qui Sommes-Nous ?
                        </h3>
                        <p>
                            <strong>BTP CONSULTING</strong> est un bureau d’ingénierie spécialisé dans l’étude technique, 
                            le diagnostic structurel et l’expertise des ouvrages. Notre mission est d’accompagner nos clients 
                            tout au long du cycle de vie de leurs projets, en assurant des solutions optimisées et adaptées 
                            aux normes et aux exigences spécifiques de chaque secteur.
                        </p>
                        <p>
                            Nous intervenons à différentes étapes, allant de l’analyse des structures existantes 
                            jusqu’à la supervision des travaux, garantissant ainsi une expertise complète et approfondie.
                        </p>
                    </div>

                    <!-- Nos Domaines d'Expertise -->
                    <div class="mb-4">
                        <h3 class="mb-3">
                            <i class="fas fa-tools text-primary me-2"></i> Nos Domaines d'Expertise
                        </h3>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-check-circle text-primary me-2"></i> Études techniques et ingénierie des structures
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-primary me-2"></i> Diagnostics structurels approfondis
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-primary me-2"></i> Réhabilitation et optimisation des infrastructures
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-primary me-2"></i> Assistance et expertise technique
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-primary me-2"></i> Contrôle et supervision des travaux
                            </li>
                        </ul>
                    </div>

                    <!-- Notre Approche -->
                    <div class="mb-4">
                        <h3 class="mb-3">
                            <i class="fas fa-lightbulb text-primary me-2"></i> Notre Approche
                        </h3>
                        <p>
                            Chez <strong>BTP CONSULTING</strong>, nous adoptons une approche centrée sur la précision et la qualité. 
                            Nous combinons l’expertise technique avec les dernières technologies en ingénierie pour proposer 
                            des analyses rigoureuses et des recommandations adaptées aux besoins spécifiques de chaque projet.
                        </p>
                        <p>
                            Nos experts assurent un suivi continu des évolutions réglementaires et technologiques afin d’offrir 
                            des solutions toujours plus performantes et innovantes.
                        </p>
                    </div>

            

                    <!-- Bouton d'Action -->
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">
                        <i class="fas fa-info-circle me-2"></i> En savoir plus
                    </a>
                </div>
            </div>

            <!-- Section Image -->
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('asset/img/logo11.jpeg')}}" class="img-fluid rounded w-100" alt="À propos de BTP CONSULTING">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
