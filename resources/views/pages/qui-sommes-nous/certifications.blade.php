@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

 <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Agrément et Certification</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Agrément et Certification</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<!-- Nos Agréments Section -->
<div class="mb-5">
<div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
<h2>Nos Agréments</h2>
<div class="divider"></div>
<p class="text-muted">Nos agréments officiels garantissent notre capacité à intervenir dans des projets d’ingénierie complexes.</p>
</div>
<div class="row g-4">
<!-- Agrément 1: Ministère de l’Équipement et de l’Eau -->
<div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
<div class="certification-item">
    <i class="fas fa-stamp"></i>
    <h3>Agrément du Ministère de l’Équipement et de l’Eau</h3>
    <p>
        BTP Consulting est agréée par le Ministère de l’Équipement et de l’Eau (N° 2020/4660117144) pour intervenir dans les domaines suivants :
    </p>
    <ul>
        <li>Hydraulique urbaine</li>
        <li>Routes et autoroutes</li>
        <li>Ouvrages d’art</li>
        <li>Barrages</li>
        <li>Travaux maritimes et fluviaux</li>
        <li>Calcul de structures</li>
        <li>Études d’impact sur l’environnement</li>
        <li>Géologie et hydrogéologie</li>
    </ul>
    <p><small>Valide du 28/10/2020 au 14/02/2025</small></p>
</div>
</div>
<!-- Agrément 2: Autorité de Sécurité -->
<div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
<div class="certification-item">
    <i class="fas fa-shield-alt"></i>
    <h3>Agrément pour la Sécurité des Constructions</h3>
    <p>
        Nous avons obtenu un agrément pour garantir la sécurité des constructions, assurant que nos diagnostics respectent les normes de sécurité les plus strictes.
    </p>
</div>
</div>
<!-- Bouton d’action -->
<div class="text-center mt-4 wow fadeInUp" data-wow-delay="0.6s">
<a href="contact.html" class="btn btn-primary rounded-pill py-2 px-4">
    <i class="fas fa-info-circle me-2"></i> En savoir plus sur nos agréments
</a>
</div>
</div>
</div>

<!-- Nos Certifications Section -->
<div class="mb-5">
<div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
<h2>Nos Certifications</h2>
<div class="divider"></div>
<p class="text-muted">Nos certifications internationales témoignent de notre engagement envers la qualité et la durabilité.</p>
</div>
<div class="row g-4">
<!-- Certification 1: ISO 9001 -->
<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
<div class="certification-item">
    <i class="fas fa-award"></i>
    <h3>Certification ISO 9001</h3>
    <p>
        Nous sommes certifiés ISO 9001, une reconnaissance internationale de notre système de management de la qualité, garantissant des services fiables et constants.
    </p>
</div>
</div>
<!-- Certification 2: ISO 14001 -->
<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
<div class="certification-item">
    <i class="fas fa-leaf"></i>
    <h3>Certification ISO 14001</h3>
    <p>
        Notre engagement pour la durabilité est validé par la certification ISO 14001, qui atteste de notre gestion environnementale responsable dans nos projets.
    </p>
</div>
</div>
<!-- Certification 3: Qualibat -->
<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
<div class="certification-item">
    <i class="fas fa-check-circle"></i>
    <h3>Certification Qualibat</h3>
    <p>
        BTP Consulting est certifiée Qualibat, une distinction qui reconnaît notre expertise technique et notre fiabilité dans les travaux de réhabilitation et de diagnostic.
    </p>
</div>
</div>
<!-- Bouton d’action -->
<div class="text-center mt-4 wow fadeInUp" data-wow-delay="0.8s">
<a href="contact.html" class="btn btn-primary rounded-pill py-2 px-4">
    <i class="fas fa-info-circle me-2"></i> En savoir plus sur nos certifications
</a>
</div>
</div>
</div>
</div>
</div>

@endsection