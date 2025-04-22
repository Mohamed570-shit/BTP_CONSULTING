@extends('layouts.app')

@section('title', 'Offres d\'Emploi')

@section('content')
    <!-- Header Start -->
    <div class="bg-breadcrumb">
        <div class="container text-center py-5">
            <h4 class="display-4 mb-4 text-accent wow fadeInDown" data-wow-delay="0.1s">OFFRES D’EMPLOI</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/qui-sommes-nous') }}">Contact</a></li>
                <li class="breadcrumb-item active text-accent">OFFRES D’EMPLOI</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Offres d'emploi Start -->
    <div class="container-fluid py-5 offres-container">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-accent">Offres d’emploi</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-briefcase text-accent me-2"></i> Rejoignez notre équipe
                </h1>
                <p class="text-muted mb-0">
                    Découvrez nos opportunités de carrière et postulez pour faire partie de BTP Consulting.
                </p>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row g-4">
                @if ($offres->isEmpty())
                    <div class="col-12">
                        <p class="text-muted text-center">Aucune offre d'emploi disponible pour le moment.</p>
                    </div>
                @else
                    @foreach ($offres as $offre)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card h-100 offre-card">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $offre->titre }}</h5>
                                    <p class="card-text flex-grow-1 text-muted">
                                        Description : {{ \Illuminate\Support\Str::limit($offre->description, 100) }} <br>
                                        Lieu : {{ $offre->location ?? 'Non spécifié' }} <br>
                                        Type : {{ $offre->type ?? 'Non spécifié' }} <br>
                                        Date limite : {{ $offre->date_expiration ? $offre->date_expiration->format('d/m/Y') : 'Pas de limite' }}
                                    </p>
                                    <button type="button" class="btn btn-outline-accent mt-auto" data-bs-toggle="modal" data-bs-target="#applyModal{{ $offre->id }}">
                                        Postuler
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal for application form -->
                        <div class="modal fade" id="applyModal{{ $offre->id }}" tabindex="-1" aria-labelledby="applyModalLabel{{ $offre->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content modal-professional">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-accent" id="applyModalLabel{{ $offre->id }}">Postuler pour {{ $offre->titre }}</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('offres.apply', $offre->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name{{ $offre->id }}" class="form-label">Nom complet</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name{{ $offre->id }}" name="name" value="{{ old('name') }}" required>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email{{ $offre->id }}" class="form-label">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email{{ $offre->id }}" name="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="cv{{ $offre->id }}" class="form-label">Télécharger votre CV (PDF)</label>
                                                <input type="file" class="form-control @error('cv') is-invalid @enderror" id="cv{{ $offre->id }}" name="cv" accept=".pdf" required>
                                                @error('cv')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="message{{ $offre->id }}" class="form-label">Message (optionnel)</label>
                                                <textarea class="form-control @error('message') is-invalid @enderror" id="message{{ $offre->id }}" name="message" rows="4">{{ old('message') }}</textarea>
                                                @error('message')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-accent">Envoyer la candidature</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Offres d'emploi End -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/offres.css') }}">
@endpush