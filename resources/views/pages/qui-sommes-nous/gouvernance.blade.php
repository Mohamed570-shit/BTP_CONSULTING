@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
 <!-- Gouvernance Start -->
 <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Gouvernance</h4>
            <h1 class="display-5 mb-4">
                <i class="fas fa-users-cog text-primary me-2"></i> Notre Structure de Gouvernance
            </h1>
            <p class="mb-0">Découvrez la structure de gouvernance de BTP Consulting, garantissant une gestion transparente et efficace.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="mb-4">Conseil d’Administration</h2>
                <p>Le Conseil d’Administration de BTP Consulting est composé de membres expérimentés qui orientent la stratégie de l’entreprise.</p>
                <!-- Exemple fictif, à personnaliser -->
                <ul class="list-unstyled">
                    <li><i class="fas fa-user text-primary me-2"></i> M. [Nom] - Président</li>
                    <li><i class="fas fa-user text-primary me-2"></i> Mme [Nom] - Membre</li>
                    <li><i class="fas fa-user text-primary me-2"></i> M. [Nom] - Membre</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Gouvernance End -->
@endsection