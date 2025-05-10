@extends('layouts.app')

@section('title', 'À la une')

@section('content')
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 text-uppercase mb-4">À LA UNE</h1>
            <h5 class="text-primary">Découvrez nos actualités et événements importants</h5>
        </div>
        
        <div class="row g-5">
            <!-- Article 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('asset/img/news1.jpg') }}" class="card-img-top" alt="Actualité 1">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2023</small>
                            <small><i class="far fa-user text-primary me-2"></i>Admin</small>
                        </div>
                        <h5 class="card-title mb-3">Nouveau projet d'infrastructure urbaine</h5>
                        <p class="card-text">BTP Consulting vient de remporter un appel d'offres majeur pour la conception d'une infrastructure urbaine innovante.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 mt-2">Lire plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Article 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('asset/img/news2.jpg') }}" class="card-img-top" alt="Actualité 2">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>15 Fév, 2023</small>
                            <small><i class="far fa-user text-primary me-2"></i>Admin</small>
                        </div>
                        <h5 class="card-title mb-3">Certification ISO 9001 renouvelée</h5>
                        <p class="card-text">Notre entreprise a obtenu le renouvellement de sa certification ISO 9001, confirmant notre engagement envers la qualité.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 mt-2">Lire plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Article 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('asset/img/news3.jpg') }}" class="card-img-top" alt="Actualité 3">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>10 Mar, 2023</small>
                            <small><i class="far fa-user text-primary me-2"></i>Admin</small>
                        </div>
                        <h5 class="card-title mb-3">Participation au salon international du BTP</h5>
                        <p class="card-text">BTP Consulting sera présent au prochain salon international du BTP pour présenter ses dernières innovations.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 mt-2">Lire plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Article 4 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('asset/img/news4.jpg') }}" class="card-img-top" alt="Actualité 4">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>05 Avr, 2023</small>
                            <small><i class="far fa-user text-primary me-2"></i>Admin</small>
                        </div>
                        <h5 class="card-title mb-3">Recrutement de nouveaux talents</h5>
                        <p class="card-text">Dans le cadre de notre expansion, nous recherchons de nouveaux talents pour renforcer nos équipes d'experts.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 mt-2">Lire plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Article 5 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('asset/img/news5.jpg') }}" class="card-img-top" alt="Actualité 5">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>20 Mai, 2023</small>
                            <small><i class="far fa-user text-primary me-2"></i>Admin</small>
                        </div>
                        <h5 class="card-title mb-3">Inauguration d'un nouveau projet</h5>
                        <p class="card-text">L'inauguration du projet X, conçu par nos équipes, a eu lieu en présence des autorités locales et de nos partenaires.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 mt-2">Lire plus</a>
                    </div>
                </div>
            </div>
            
            <!-- Article 6 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('asset/img/news6.jpg') }}" class="card-img-top" alt="Actualité 6">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>15 Juin, 2023</small>
                            <small><i class="far fa-user text-primary me-2"></i>Admin</small>
                        </div>
                        <h5 class="card-title mb-3">Partenariat stratégique</h5>
                        <p class="card-text">BTP Consulting annonce un nouveau partenariat stratégique pour développer des solutions innovantes en génie civil.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 mt-2">Lire plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection