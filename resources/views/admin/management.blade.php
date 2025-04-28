@extends('layouts.admin')

@section('title', 'Gestion des Départements')

@section('content')
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fas fa-building me-2"></i> Départements</h5>
            <a href="{{ route('admin.departments.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus me-1"></i> Ajouter un département
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(isset($departments) && count($departments) > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Icône</th>
                                <th>Ordre</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ Str::limit($department->description, 50) }}</td>
                                    <td><i class="fas {{ $department->icon }}"></i></td>
                                    <td>{{ $department->order }}</td>
                                    <td>
                                        @if($department->active)
                                            <span class="badge bg-success">Actif</span>
                                        @else
                                            <span class="badge bg-danger">Inactif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.departments.edit', $department->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.departments.destroy', $department->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce département?');" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info">
                    Aucun département n'a été trouvé. Veuillez en ajouter un.
                </div>
            @endif
        </div>
    </div>
@endsection
