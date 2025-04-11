@extends('layouts.app')

@section('title', 'Offres d\'Emploi')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">OFFRES D’EMPLOI</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('contact') }}">Contact</a></li>
                <li class="breadcrumb-item active text-primary">Offres d’emploi</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Offres d'emploi Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Offres d’emploi</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-briefcase text-primary me-2"></i> Rejoignez notre équipe
                </h1>
                <p class="mb-0">
                    Découvrez nos opportunités de carrière et postulez pour faire partie de BTP Consulting.
                </p>
            </div>

            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="mb-4">Postes disponibles</h2>
                    @if ($offres->isEmpty())
                        <p class="text-muted">Aucune offre d'emploi disponible pour le moment.</p>
                    @else
                        @foreach ($offres as $offre)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $offre->titre }}</h5>
                                    <p class="card-text">
                                        Description : {{ \Illuminate\Support\Str::limit($offre->description, 100) }} <br>
                                        Lieu : {{ $offre->location ?? 'Non spécifié' }} <br>
                                        Type : {{ $offre->type ?? 'Non spécifié' }} <br>
                                        Date limite : {{ $offre->date_expiration ? \Carbon\Carbon::parse($offre->date_expiration)->format('d/m/Y') : 'Pas de limite' }}
                                    </p>
                                    <a href="#" class="btn btn-primary">Postuler</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Offres d'emploi End -->
@endsection