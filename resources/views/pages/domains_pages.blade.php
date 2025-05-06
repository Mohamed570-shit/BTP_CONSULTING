@extends('layouts.app')

@section('content')

<!-- Banner Image Section -->
<div class="domain-banner" style="position: relative; width: 100%; height: 220px; overflow: hidden;">
    <img src="{{ asset('asset/img/Hydraulique_Urbaine.jpeg') }}" alt="Banner {{ $domaine->title }}" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.6);">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-white fw-bold" style="letter-spacing: 2px;">{{ strtoupper($domaine->title) }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50">Home</a></li>
                    <li class="breadcrumb-item text-white-50">Nos Domaines d’Activités</li>
                    <li class="breadcrumb-item active text-white" aria-current="page">{{ $domaine->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container py-5">
    <!-- Dynamic Title -->
    <div class="text-center mb-2">
        <span class="text-primary" style="font-size: 1.1rem;">{{ $domaine->title }}</span>
    </div>
    <!-- Dynamic Icon + Subtitle -->
    <div class="text-center mb-3">
        <i class="{{ $domaine->icon ?? 'fas fa-cube' }} text-primary" style="font-size: 2.5rem;"></i>
        <h2 class="fw-bold mt-2">{{ $domaine->subtitle }}</h2>
    </div>
    <!-- Dynamic Description -->
    <div class="text-center mb-4">
        <p class="lead">{{ $domaine->description }}</p>
    </div>

    <!-- Static Section: Services Title & Description -->
    <div class="section-title text-center mb-4">
        <h2>Nos Services dans le Domaine des {{ $domaine->title }}</h2>
        <div class="divider mx-auto" style="width:60px;height:4px;background:#007bff;"></div>
        <p class="text-muted">Nous offrons une gamme complète de services pour répondre aux besoins de vos projets dans ce domaine, de la conception à la mise en œuvre.</p>
    </div>

    <!-- Dynamic Cards (Cartes) -->
    <div class="row g-4 mb-5">
        @foreach($domaine->cartes as $carte)
            <div class="col-md-6 col-lg-4">
                <div class="service-item h-100">
                    <i class="{{ $carte->icon ?? 'fas fa-cube' }}"></i>
                    <h3>{{ $carte->title }}</h3>
                    <p>{{ $carte->description }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Static Section: Réalisations Title -->
    <div class="section-title text-center mb-4">
        <h2>Nos Réalisations en {{ $domaine->title }}</h2>
        <div class="divider mx-auto" style="width:60px;height:4px;background:#007bff;"></div>
    </div>


    <!-- Dynamic Images -->
    <div class="row g-4 project-gallery mb-5">
        @foreach($domaine->images as $image)
            <div class="col-md-6 col-lg-4">
                <img src="{{ route('front.domain.image', basename($image->image)) }}" alt="Image {{ $domaine->title }}" style="width:100%;height:220px;object-fit:cover;border-radius:10px;">
            </div>
        @endforeach
    </div>


    <!-- Dynamic Question & Réponse -->
    <div class="why-choose-us mb-5">
        <h3>{{ $domaine->question }}</h3>
        <ul>
            @foreach(explode("\n", $domaine->reponse) as $line)
                @if(trim($line) !== '')
                    <li>{{ $line }}</li>
                @endif
            @endforeach
        </ul>
    </div>

    <!-- Static Call to Action Button -->
    <div class="text-center">
        <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill py-3 px-5">
            <i class="fas fa-phone-alt me-2"></i> Contactez-nous pour une Consultation
        </a>
    </div>
</div>

<!-- Custom Styles (inspired by your example) -->
@push('styles')
<style>
    .domain-banner {
        margin-bottom: 0;
    }
    .domain-banner h1 {
        font-size: 2.8rem;
        margin-bottom: 0.5rem;
        text-shadow: 0 2px 8px rgba(0,0,0,0.3);
    }
    .domain-banner .breadcrumb {
        background: transparent;
        margin-bottom: 0;
    }
    .domain-banner .breadcrumb-item,
    .domain-banner .breadcrumb-item a {
        color: #fff !important;
        font-size: 1rem;
    }
    .service-item {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        transition: 0.3s;
        height: 100%;
    }
    .service-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .service-item i {
        font-size: 3rem;
        color: #007bff;
        margin-bottom: 15px;
    }
    .service-item h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
    }
    .project-gallery img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 10px;
        transition: 0.3s;
    }
    .project-gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .why-choose-us {
        background: #007bff;
        color: white;
        padding: 40px;
        border-radius: 15px;
    }
    .why-choose-us h3 {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }
    .why-choose-us ul {
        list-style: none;
        padding: 0;
    }
    .why-choose-us ul li {
        margin-bottom: 10px;
        position: relative;
        padding-left: 25px;
    }
    .why-choose-us ul li:before {
        content: "\f058";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        position: absolute;
        left: 0;
        color: #fff;
        font-size: 1.2rem;
    }
</style>
@endpush
@endsection
