@extends('layouts.admin')

@section('title', 'Gestion des Départements')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0"><i class="fas fa-building me-2"></i> Gestion des Départements</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
            <i class="fas fa-plus"></i> Ajouter un département
        </button>
    </div>
    <div class="row">
        <!-- Sidebar départements -->
        <div class="col-md-3">
            <div class="list-group" id="departmentList">
                @foreach($departements as $dep)
                    <button class="list-group-item list-group-item-action {{ $loop->first ? 'active' : '' }}" data-department="{{ $dep->id }}">
                        <i class="fas fa-building me-2"></i> {{ $dep->title }}
                    </button>
                @endforeach
            </div>
        </div>
        <!-- Main content -->
        <div class="col-md-9">
            @foreach($departements as $dep)
            <div class="department-content {{ !$loop->first ? 'd-none' : '' }}" id="department-{{ $dep->id }}">
                <!-- Supprimer département -->
                <div class="d-flex justify-content-end mb-2">
                    <form action="{{ route('admin.departments.destroy', $dep->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce département et toutes ses cartes associées ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                            <i class="fas fa-trash"></i> Supprimer ce département
                        </button>
                    </form>
                </div>
                <!-- Modifier département -->
                <form method="POST" action="{{ route('admin.departments.update', $dep->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Titre</label>
                        <input type="text" class="form-control" name="title" value="{{ $dep->title }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sous-titre</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ $dep->subtitle }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3" name="description">{{ $dep->description }}</textarea>
                    </div>
                    <button class="btn btn-success mb-4" type="submit">Enregistrer les modifications</button>
                </form>
                <!-- Cartes Section -->
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Cartes du Département</h5>
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCartModal-{{ $dep->id }}">
                        <i class="fas fa-plus"></i> Ajouter une carte
                    </button>
                </div>
                <div class="row g-3 mb-4">
                    @foreach($dep->cartDepartements as $carte)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">                
                                @if($carte->image)
                                    <img src="{{ route('admin.cart.image', $carte->image) }}" class="card-img-top" alt="{{ $carte->title }}" style="width:100%;height:180px;object-fit:cover;border-radius:10px 10px 0 0;">
                                @endif
                            <div class="card-body text-center">
                                <i class="{{ $carte->icon ?? 'fas fa-cube' }} fa-2x text-primary mb-2"></i>
                                <h6 class="card-title">{{ $carte->title }}</h6>
                                <p class="card-text small">{{ $carte->description }}</p>
                                <button class="btn btn-sm btn-warning me-1" data-bs-toggle="modal" data-bs-target="#editCartModal-{{ $carte->id }}"><i class="fas fa-edit"></i></button>
                                <form action="{{ route('admin.cartdepartements.destroy', $carte->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette carte ?')"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Edit Carte -->
                    <div class="modal fade" id="editCartModal-{{ $carte->id }}" tabindex="-1" aria-labelledby="editCartModalLabel-{{ $carte->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <form class="modal-content" method="POST" action="{{ route('admin.cartdepartements.update', $carte->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCartModalLabel-{{ $carte->id }}">Modifier la carte</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-2">
                                        <label class="form-label">Titre de la carte</label>
                                        <input type="text" class="form-control" name="title" value="{{ $carte->title }}" required>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Icone</label>
                                        <input type="text" class="form-control" name="icon" value="{{ $carte->icon }}">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="2" name="description">{{ $carte->description }}</textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image">                                      
                                        @if($carte->image)
                                            <img src="{{ route('admin.cart.image', $carte->image) }}" alt="Image actuelle" style="width:100px;margin-top:10px;">
                                        @endif                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Modal Ajouter Carte -->
                <div class="modal fade" id="addCartModal-{{ $dep->id }}" tabindex="-1" aria-labelledby="addCartModalLabel-{{ $dep->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" method="POST" action="{{ route('admin.cartdepartements.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="departement_id" value="{{ $dep->id }}">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addCartModalLabel-{{ $dep->id }}">Ajouter une carte</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-2">
                                    <label class="form-label">Titre de la carte</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Icone</label>
                                    <input type="text" class="form-control" name="icon">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="2" name="description"></textarea>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal Ajouter Département -->
<div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="{{ route('admin.departments.store') }}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="addDepartmentModalLabel">Ajouter un département</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <label class="form-label">Titre</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Sous-titre</label>
                    <input type="text" class="form-control" name="subtitle">
                </div>
                <div class="mb-2">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Sidebar switch logic
    document.querySelectorAll('#departmentList button').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('#departmentList button').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            let id = this.getAttribute('data-department');
            document.querySelectorAll('.department-content').forEach(c => c.classList.add('d-none'));
            document.getElementById('department-' + id).classList.remove('d-none');
        });
    });
</script>
@endpush
@endsection