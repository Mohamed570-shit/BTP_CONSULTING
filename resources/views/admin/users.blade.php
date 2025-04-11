@extends('layouts.admin')

@section('title', 'Gestion des Utilisateurs')

@section('content')
    <!-- Card Container -->
    <div class="card border-0 shadow-sm">
        <!-- Card Header -->
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">
                <i class="fas fa-users me-2"></i> Liste des Utilisateurs
            </h5>
            <a href="{{ route('admin.users.create') }}" class="btn btn-sm" style="background-color: var(--primary-color); color: white;">
                <i class="fas fa-plus me-1"></i> Ajouter un utilisateur
            </a>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <!-- Messages de succès ou d'erreur -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <!-- Description -->
            <p class="text-muted mb-3">
                Cette page vous permet de gérer les utilisateurs du système (ajouter, modifier, supprimer).
            </p>

            <!-- Tableau des utilisateurs -->
            @if ($users->isEmpty())
                <p class="text-muted">Aucun utilisateur trouvé.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rôle</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role ?? 'Non défini' }}</td>
                                    <td>
                                        @if ($user->profile_image)
                                            <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Photo" class="rounded-circle" width="40">
                                        @else
                                            <i class="fas fa-user-circle text-muted" style="font-size: 40px;"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">
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
