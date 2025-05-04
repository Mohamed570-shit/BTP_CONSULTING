@extends('layouts.admin')

@section('title', 'Gestion des Domaines')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0"><i class="fas fa-building me-2"></i> Gestion des Domaines</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDomainModal">
            <i class="fas fa-plus"></i> Ajouter un domaine
        </button>
    </div>
    <div class="row">
        <!-- Navbar des domaines dynamique -->
        <div class="col-md-3">
            <div class="list-group" id="domainList">
                @foreach($domaines as $domaine)
                    <button class="list-group-item list-group-item-action {{ $loop->first ? 'active' : '' }}" data-domain="{{ $domaine->id }}">
                        <i class="{{ $domaine->icon ?? 'fas fa-building' }} me-2"></i> {{ $domaine->title }}
                    </button>
                @endforeach
            </div>
        </div>
        <!-- Contenu du domaine sélectionné dynamique -->
        <div class="col-md-9">
            @foreach($domaines as $domaine)
            <div class="domain-content {{ !$loop->first ? 'd-none' : '' }}" id="domain-{{ $domaine->id }}">
            <!-- button supprimer     -->
            <div class="d-flex justify-content-end mb-2">
                    <form action="{{ route('admin.domaines.destroy', $domaine->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce domaine et toutes ses données associées ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                            <i class="fas fa-trash"></i> Supprimer ce domaine
                        </button>
                    </form>
                </div>
                <form method="POST" action="{{ route('admin.domaines.update', $domaine->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Titre</label>
                        <input type="text" class="form-control" name="title" value="{{ $domaine->title }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sous-titre</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ $domaine->subtitle }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Icone du titre</label>
                        <input type="text" class="form-control" name="icon" value="{{ $domaine->icon }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3" name="description">{{ $domaine->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Question</label>
                        <input type="text" class="form-control" name="question" value="{{ $domaine->question }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Réponse</label>
                        <textarea class="form-control" rows="4" name="reponse">{{ $domaine->reponse }}</textarea>
                    </div>
                    <button class="btn btn-success mb-4" type="submit">Enregistrer les modifications</button>
                </form>
                <!-- Cartes Section -->
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Cartes des Services</h5>
                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addCardModal-{{ $domaine->id }}">
                        <i class="fas fa-plus"></i> Ajouter une carte
                    </button>
                </div>
                <div class="row g-3 mb-4">
                    @foreach($domaine->cartes as $carte)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <i class="{{ $carte->icon ?? 'fas fa-cube' }} fa-2x text-primary mb-2"></i>
                                <h6 class="card-title">{{ $carte->title }}</h6>
                                <p class="card-text small">{{ $carte->description }}</p>
                                <button class="btn btn-sm btn-warning me-1" data-bs-toggle="modal" data-bs-target="#editCardModal-{{ $carte->id }}"><i class="fas fa-edit"></i></button>
                                <form action="{{ route('admin.cartes.destroy', $carte->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cette carte ?')"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Edit Carte -->
                    <div class="modal fade" id="editCardModal-{{ $carte->id }}" tabindex="-1" aria-labelledby="editCardModalLabel-{{ $carte->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <form class="modal-content" method="POST" action="{{ route('admin.cartes.update', $carte->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCardModalLabel-{{ $carte->id }}">Modifier la carte</h5>
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
                <div class="modal fade" id="addCardModal-{{ $domaine->id }}" tabindex="-1" aria-labelledby="addCardModalLabel-{{ $domaine->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" method="POST" action="{{ route('admin.cartes.store') }}">
                            @csrf
                            <input type="hidden" name="domaine_id" value="{{ $domaine->id }}">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addCardModalLabel-{{ $domaine->id }}">Ajouter une carte</h5>
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Images Section -->
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6>Images du domaine</h6>
                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addImageModal-{{ $domaine->id }}">
                                <i class="fas fa-plus"></i> Ajouter une image
                            </button>
                        </div>
                        <div class="d-flex flex-wrap align-items-end">
                            @foreach($domaine->images as $image)
                            <div class="mb-3 me-3">
                                <img src="{{ route('admin.domain.image', basename($image->image)) }}"  alt="image domaine" style="width:120px; height:80px; object-fit:cover; border-radius:10px;">
                                <div>
                                    <button class="btn btn-sm btn-warning me-1 mt-1" data-bs-toggle="modal" data-bs-target="#editImageModal-{{ $image->id }}"><i class="fas fa-edit"></i></button>
                                    <form action="{{ route('admin.images.destroy', $image->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mt-1" onclick="return confirm('Supprimer cette image ?')"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Modal Edit Image -->
                            <div class="modal fade" id="editImageModal-{{ $image->id }}" tabindex="-1" aria-labelledby="editImageModalLabel-{{ $image->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form class="modal-content" method="POST" action="{{ route('admin.images.update', $image->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editImageModalLabel-{{ $image->id }}">Modifier l'image</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                <label class="form-label">Image</label>
                                                <input type="file" class="form-control" name="image">
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
                    </div>
                </div>
                <!-- Modal Ajouter Image -->
                <div class="modal fade" id="addImageModal-{{ $domaine->id }}" tabindex="-1" aria-labelledby="addImageModalLabel-{{ $domaine->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" method="POST" action="{{ route('admin.images.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="domaine_id" value="{{ $domaine->id }}">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addImageModalLabel-{{ $domaine->id }}">Ajouter une image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-2">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" required>
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

<!-- Modal Ajouter Domaine -->
<div class="modal fade" id="addDomainModal" tabindex="-1" aria-labelledby="addDomainModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" action="{{ route('admin.domaines.store') }}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="addDomainModalLabel">Ajouter un domaine</h5>
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
                    <label class="form-label">Icone du titre</label>
                    <input type="text" class="form-control" name="icon">
                </div>
                <div class="mb-2">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="2" name="description"></textarea>
                </div>
                <div class="mb-2">
                    <label class="form-label">Question</label>
                    <input type="text" class="form-control" name="question">
                </div>
                <div class="mb-2">
                    <label class="form-label">Réponse</label>
                    <textarea class="form-control" rows="4" name="reponse" placeholder="Vous pouvez mettre une liste ou un texte long ici..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>

<!-- Script pour activer le switch entre les domaines -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('#domainList button').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('#domainList button').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                document.querySelectorAll('.domain-content').forEach(dc => dc.classList.add('d-none'));
                let id = this.getAttribute('data-domain');
                document.getElementById('domain-' + id).classList.remove('d-none');
            });
        });
    });
</script>
@endsection