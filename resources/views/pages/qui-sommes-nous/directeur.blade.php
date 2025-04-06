@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Mot du Directeur Général</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Mot du Directeur Général Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <!-- En-tête -->
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Mot du Directeur Général</h4>
            <h1 class="display-5 mb-4">
                <i class="fas fa-user-tie text-primary me-2"></i> Vision et Engagement du Directeur Général
            </h1>
        </div>

        <!-- Contenu principal -->
        <div class="row g-5 align-items-center">
            <!-- Section texte -->
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="director-section">
                    <!-- Citation -->
                    <i class="fas fa-quote-left quote-icon left"></i>
                    <i class="fas fa-quote-right quote-icon right"></i>

                    <!-- Introduction -->
                    <h3 class="mb-3">
                        <i class="fas fa-handshake text-primary me-2"></i> Bienvenue à Tous
                    </h3>
                  <p class="mb-4">
    <strong>Chers partenaires, clients et amis,</strong><br>
    Au nom de <strong>BTP Consulting</strong>, j’ai l’honneur de vous accueillir avec une profonde gratitude. Depuis nos débuts, nous nous engageons à faire de l’excellence, de l’innovation et de la durabilité les fondements de notre réussite.
</p>

                    <!-- Notre Mission -->
                    <h3 class="mb-3">
                        <i class="fas fa-bullseye text-primary me-2"></i> Notre Mission
                    </h3>
                    <p class="mb-4">
                        Chez BTP Consulting, nous croyons que chaque projet est une opportunité pour construire un avenir meilleur. 
                        Grâce à notre expertise en études techniques, diagnostics structurels et réhabilitation, nous offrons des solutions 
                        d’ingénierie fiables et durables qui répondent aux besoins de nos clients.
                    </p>

                    <!-- Notre Engagement -->
                    <h3 class="mb-3">
                        <i class="fas fa-shield-alt text-primary me-2"></i> Notre Engagement
                    </h3>
                    <p class="mb-4">
                        Nous nous engageons à garantir la sécurité, la qualité et le respect des normes environnementales dans tous nos projets. 
                        Je tiens à remercier nos clients et partenaires pour leur confiance, ainsi que notre équipe pour son engagement et son professionnalisme.
                    </p>

                    <!-- Clôture -->
                    <h3 class="mb-3">
                        <i class="fas fa-hands-helping text-primary me-2"></i> Ensemble pour l’Avenir
                    </h3>
                    <p class="mb-4">
                        Ensemble, continuons à bâtir des projets qui marquent l’avenir. N’hésitez pas à nous contacter pour toute collaboration ou demande d’information.
                    </p>

                    <!-- Signature -->
                    <p class="director-signature">
                        <strong>M. [Nom du Directeur Général]</strong> <br>
                        Directeur Général de BTP Consulting
                    </p>

                    <!-- Bouton d'action -->
                    <a href="contact.html" class="btn btn-primary rounded-pill py-2 px-4 mt-3">
                        <i class="fas fa-envelope me-2"></i> Contactez-nous
                    </a>
                </div>
            </div>

            <!-- Section image -->
            <div class="col-lg-4 wow fadeInRight text-center" data-wow-delay="0.4s">
                <div class="director-image">
                    <img src="{{ asset('asset/img/logo.png') }}" class="img-fluid rounded-circle shadow-lg" alt="Directeur Général de BTP Consulting">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mot du Directeur Général End -->

@endsection