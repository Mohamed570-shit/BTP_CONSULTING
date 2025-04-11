@extends('layouts.admin')

@section('title', 'Offres d\'Emploi')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="fas fa-briefcase me-2"></i> Liste des Offres d'Emploi
            </h5>
            <a href="{{ route('admin.jobs.create') }}" class="btn btn-sm" style="background-color: var(--primary-color); color: white;">
                <i class="fas fa-plus me-1"></i> Ajouter une offre
            </a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <p class="text-muted mb-3">
                Cette page vous permet de gérer les offres d'emploi de l'entreprise (ajouter, modifier, supprimer).
            </p>
            @if ($offres->isEmpty())
                <p class="text-muted">Aucune offre d'emploi trouvée.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Lieu</th>
                                <th>Type</th>
                                <th>Date limite</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($offres as $offre)
                                <tr>
                                    <td>{{ $offre->id }}</td>
                                    <td>{{ $offre->titre }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($offre->description, 50) }}</td>
                                    <td>{{ $offre->location ?? 'N/A' }}</td>
                                    <td>{{ $offre->type ?? 'N/A' }}</td>
                                    <td>{{ $offre->date_expiration ? \Carbon\Carbon::parse($offre->date_expiration)->format('d/m/Y') : 'Pas de limite' }}</td>
                                    <td>
                                        <a href="{{ route('admin.jobs.edit', $offre->id) }}" class="btn btn-sm btn-warning me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.jobs.destroy', $offre->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer cette offre ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection