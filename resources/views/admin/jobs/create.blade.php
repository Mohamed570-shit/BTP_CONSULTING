@extends('layouts.admin')

@section('title', 'Ajouter une Offre d\'Emploi')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0"><i class="fas fa-briefcase me-2"></i> Ajouter une Offre d'Emploi</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.jobs.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre') }}" required>
                    @error('titre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Lieu (optionnel)</label>
                    <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location') }}">
                    @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type (optionnel)</label>
                    <select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                        <option value="">Sélectionner un type</option>
                        <option value="CDI" {{ old('type') == 'CDI' ? 'selected' : '' }}>CDI</option>
                        <option value="CDD" {{ old('type') == 'CDD' ? 'selected' : '' }}>CDD</option>
                        <option value="Stage" {{ old('type') == 'Stage' ? 'selected' : '' }}>Stage</option>
                        <option value="Freelance" {{ old('type') == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date_expiration" class="form-label">Date limite (optionnel)</label>
                    <input type="date" class="form-control @error('date_expiration') is-invalid @enderror" id="date_expiration" name="date_expiration" value="{{ old('date_expiration') }}">
                    @error('date_expiration')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn" style="background-color: var(--primary-color); color: white;">Créer</button>
            </form>
        </div>
    </div>
@endsection