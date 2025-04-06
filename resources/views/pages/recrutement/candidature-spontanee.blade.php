
@extends('layouts.app')

@section('title', 'Accueil')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">CANDIDATURE SPONTANÉE</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Contact</a></li>
            <li class="breadcrumb-item active text-primary">Candidature Spontanée</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Candidature Spontanée Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Candidature Spontanée</h4>
            <h1 class="display-5 mb-4">
                <i class="fas fa-user-plus text-primary me-2"></i> Postulez dès maintenant
            </h1>
            <p class="mb-0">Soumettez votre candidature spontanée en remplissant le formulaire ci-dessous.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="mb-4">Formulaire de candidature</h2>
                <form>
                    <!-- Informations personnelles -->
                    <div class="mb-4">
                        <input type="text" class="form-control" placeholder="Votre Nom" required>
                    </div>
                    <div class="mb-4">
                        <input type="email" class="form-control" placeholder="Votre Email" required>
                    </div>
                    <div class="mb-4">
                        <input type="tel" class="form-control" placeholder="Votre Téléphone" required>
                    </div>
        
                    <!-- Documents à télécharger -->
                    <div class="mb-4">
                        <label class="form-label">Ajouter votre CV</label>
                        <input type="file" class="form-control" accept=".pdf,.doc,.docx" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Ajouter attestation de travail</label>
                        <input type="file" class="form-control" accept=".pdf,.doc,.docx" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Ajouter historique CNSS</label>
                        <input type="file" class="form-control" accept=".pdf,.doc,.docx" required>
                    </div>
        
                    <!-- Lettre de motivation -->
                    <div class="mb-4">
                        <textarea class="form-control" rows="5" placeholder="Lettre de motivation" required></textarea>
                    </div>
        
                    <!-- Bouton d'envoi -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Candidature Spontanée End -->
@endSection