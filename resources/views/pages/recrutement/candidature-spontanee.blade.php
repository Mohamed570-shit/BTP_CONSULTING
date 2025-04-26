@extends('layouts.app')

@section('title', 'Candidature Spontanée')

@section('content')
<style>
    .bg-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/5d/83/72/5d83726870c7d76cb2eeefda20143bd4.jpg');
        background-size: cover;
        background-position: center;
    }
</style>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">CANDIDATURE SPONTANÉE</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
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

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                

                <form action="{{ route('candidature.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Informations personnelles -->
                    <div class="mb-4">
                        <input type="text" name="nom" class="form-control" placeholder="Votre Nom" value="{{ old('nom') }}" required>
                        @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" class="form-control" placeholder="Votre Email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="tel" name="telephone" class="form-control" placeholder="Votre Téléphone" value="{{ old('telephone') }}" required>
                        @error('telephone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Poste à choisir -->
<div class="mb-4">
    <select name="post" class="form-control" required>
        <option value="">Choisissez un poste</option>
        @foreach($offres as $offre)
            <option value="{{ $offre->titre }}" {{ old('post') == $offre->titre ? 'selected' : '' }}>
                {{ $offre->titre }}
            </option>
        @endforeach
    </select>
    @error('post')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
                    <!-- Documents à télécharger -->
                    <div class="mb-4">
                        <label class="form-label">Ajouter votre CV</label>
                        <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
                        @error('cv')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Lettre de motivation -->
                    <div class="mb-4">
                        <textarea name="lettre_motivation" class="form-control" rows="5" placeholder="Lettre de motivation" required>{{ old('lettre_motivation') }}</textarea>
                        @error('lettre_motivation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
@endsection
