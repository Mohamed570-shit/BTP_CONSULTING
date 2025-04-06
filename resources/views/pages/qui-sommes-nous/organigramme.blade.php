@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">ORGANIGRAMME</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Publications</a></li>
                <li class="breadcrumb-item active text-primary">Organigramme</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Organigramme Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Organigramme</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-sitemap text-primary me-2"></i> Structure Organisationnelle
                </h1>
                <p class="mb-0">Visualisez la structure organisationnelle de BTP Consulting pour une meilleure compréhension de notre fonctionnement.</p>
            </div>

            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="mb-4">Organigramme</h2>
                    <!-- Image ou représentation graphique à insérer -->
                    <img src="img/organigramme.jpg" class="img-fluid" alt="Organigramme BTP Consulting">
                    <p class="mt-4">*Veuillez noter que cet organigramme est un exemple fictif. Contactez-nous pour plus de détails.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Organigramme End -->

@endsection