@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
   <!-- Header Start -->
   <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nos Valeurs</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Nos valeurs</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
</div>
<!-- Navbar & Hero End -->

</style>
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
            <!-- Valeur 1: Éthique -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="value-item">
                    <i class="fas fa-balance-scale"></i>
                    <h3>Éthique</h3>
                    <p>
                        Nous cultivons une culture d’intégrité et de transparence pour mériter la confiance de nos clients et partenaires dans chaque projet d’ingénierie.
                    </p>
                </div>
            </div>
            <!-- Valeur 2: Esprit d’équipe -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="value-item">
                    <i class="fas fa-users"></i>
                    <h3>Esprit d’équipe</h3>
                    <p>
                        La réussite de nos projets repose sur la collaboration et l’engagement de nos équipes, mobilisées pour offrir des solutions techniques optimales.
                    </p>
                </div>
            </div>
            <!-- Valeur 3: Satisfaction Client -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="value-item">
                    <i class="fas fa-smile"></i>
                    <h3>Satisfaction Client</h3>
                    <p>
                        Nous nous engageons à fournir des solutions d’ingénierie qui répondent aux attentes de nos clients en termes de qualité, de coût et de délais.
                    </p>
                </div>
            </div>
            <!-- Valeur 4: Performance -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="value-item">
                    <i class="fas fa-chart-line"></i>
                    <h3>Performance</h3>
                    <p>
                        Grâce à une maîtrise des techniques modernes et une gestion rigoureuse, nous assurons des performances élevées dans nos diagnostics et études techniques.
                    </p>
                </div>
            </div>
            <!-- Valeur 5: Développement Durable -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="value-item">
                    <i class="fas fa-leaf"></i>
                    <h3>Développement Durable</h3>
                    <p>
                        Nous intégrons des pratiques durables dans nos projets, de l’étude à la réalisation, pour préserver l’environnement et assurer un avenir responsable.
                    </p>
                </div>
            </div>
            <!-- Valeur 6: Innovation -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="value-item">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Innovation</h3>
                    <p>
                        Nous recherchons constamment des solutions innovantes pour optimiser nos diagnostics structurels et répondre aux défis de l’ingénierie moderne.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nos Valeurs End -->
@endsection