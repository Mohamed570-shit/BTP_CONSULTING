@extends('layouts.admin')

@section('title', 'Qui Sommes-Nous')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i> Qui Sommes-Nous</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <!-- Small Navbar -->
            <div class="col-md-3 mb-3">
                <ul class="nav flex-column nav-pills" id="aboutNav">
                    <li class="nav-item mb-2">
                        <a class="nav-link active" data-section="apropos" href="#">À propos de BTP-CONSULTING</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" data-section="motdg" href="#">Mot du Directeur Général</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" data-section="valeurs" href="#">Nos valeurs</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" data-section="chiffres" href="#">Chiffres clés</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" data-section="certifications" href="#">Certifications</a>
                    </li>
                </ul>
            </div>
            <!-- Content Area -->
            <div class="col-md-9">
                <!-- À Propos de Nous -->
                    <div id="aboutSection-apropos">
                        <h5 class="text-orange mb-2">À Propos de Nous</h5>
                        <form action="{{ route('admin.apropos.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label"><b>Sous-titre</b></label>
                                <input type="text" class="form-control" name="subtitle" value="{{ $apropos->subtitle ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Qui Sommes-Nous ?</b></label>
                                <textarea class="form-control" name="description" rows="4">{{ $apropos->description ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Nos Domaines d'Expertise</b></label>
                                <textarea class="form-control" name="domaines" rows="5">{{ $apropos->domaines ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Notre Approche</b></label>
                                <textarea class="form-control" name="approche" rows="4">{{ $apropos->approche ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Changer la photo (logo ou autre)</b></label>
                                <input type="file" class="form-control" name="image">           
                                @if(!empty($apropos->image))
                                    <div class="text-center mt-2">
                                        <img src="{{ route('apropos.image', ['filename' => basename($apropos->image)]) }}" style="max-width:200px;">
                                    </div>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                    <!-- Mot du Directeur Général -->
                    <div id="aboutSection-motdg" style="display:none;">
                    <form action="{{ route('admin.motdg.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label"><b>Titre</b></label>
                                <input type="text" class="form-control" name="title" value="{{ $motdg->title ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Sous-titre</b></label>
                                <input type="text" class="form-control" name="subtitle" value="{{ $motdg->subtitle ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Bienvenue à Tous</b></label>
                                <textarea class="form-control" name="welcome" rows="2">{{ $motdg->welcome ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Notre Mission</b></label>
                                <textarea class="form-control" name="mission" rows="2">{{ $motdg->mission ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Notre Engagement</b></label>
                                <textarea class="form-control" name="engagement" rows="2">{{ $motdg->engagement ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Ensemble pour l’Avenir</b></label>
                                <textarea class="form-control" name="future" rows="2">{{ $motdg->future ?? '' }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Nom du Directeur</b></label>
                                <input type="text" class="form-control" name="director_name" value="{{ $motdg->director_name ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Poste du Directeur</b></label>
                                <input type="text" class="form-control" name="director_title" value="{{ $motdg->director_title ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Photo du Directeur</b></label>
                                <input type="file" class="form-control" name="image">
                                @if(!empty($motdg->image))
                                    <div class="text-center mt-2">
                                    <img src="{{ route('motdg.image', ['filename' => basename($motdg->image)]) }}" style="max-width:200px;">
                                    </div>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                    <!-- des valeurs -->
                    <div id="aboutSection-valeurs" style="display:none;">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">Liste des valeurs</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addValeurModal">
                                <i class="fas fa-plus"></i> Ajouter une valeur
                            </button>
                        </div>
                        
                        <div class="row g-4">
                        @foreach($valeurs as $valeur)
                            <div class="col-md-6 col-lg-4">
                                <div class="card shadow-sm p-3 text-center">
                                    <div class="mb-2">
                                        <i class="{{ $valeur->icon }} fa-3x text-orange"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2">{{ $valeur->title }}</h5>
                                    <p>{{ $valeur->description }}</p>
                                    <div class="d-flex justify-content-center gap-2 mt-3">
                                        <!-- Modifier Button -->
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editValeurModal{{ $valeur->id }}">
                                            <i class="fas fa-edit"></i> Modifier
                                        </button>
                                        <form action="{{ route('admin.valeurs.destroy', $valeur->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cette valeur ?')">
                                                <i class="fas fa-trash"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Modifier -->
                            <div class="modal fade" id="editValeurModal{{ $valeur->id }}" tabindex="-1" aria-labelledby="editValeurModalLabel{{ $valeur->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.valeurs.update', $valeur->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editValeurModalLabel{{ $valeur->id }}">Modifier la valeur</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Icon</label>
                                                    <input type="text" class="form-control" name="icon" value="{{ $valeur->icon }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Titre</label>
                                                    <input type="text" class="form-control" name="title" value="{{ $valeur->title }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control" name="description" rows="3" required>{{ $valeur->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>

                        <!-- Modal d'ajout d'une valeur dynamique -->
                        <div class="modal fade" id="addValeurModal" tabindex="-1" aria-labelledby="addValeurModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('admin.valeurs.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addValeurModalLabel">Ajouter une valeur</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Icon</label>
                                                <input type="text" class="form-control" name="icon" placeholder="ex: fas fa-balance-scale" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Titre</label>
                                                <input type="text" class="form-control" name="title" placeholder="Titre de la valeur" required>
                                            </div>                
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" name="description" rows="3" placeholder="Description de la valeur" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- chiffres clés -->
                    <div id="aboutSection-chiffres" style="display:none;">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">Liste des chiffres clés</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addChiffreModal">
                                <i class="fas fa-plus"></i> Ajouter un chiffre
                            </button>
                        </div>
                        <div class="row g-4">
                            @foreach($chiffres as $chiffre)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card shadow-sm p-3 text-center">
                                        <div class="mb-2">
                                            <i class="{{ $chiffre->icon }} fa-3x text-orange"></i>
                                        </div>
                                        <h3 class="fw-bold mb-1">{{ $chiffre->value }}</h3>
                                        <p class="mb-2">{{ $chiffre->label }}</p>
                                        <div class="d-flex justify-content-center gap-2 mt-3">
                                            <!-- Modifier Button -->
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editChiffreModal{{ $chiffre->id }}">
                                                <i class="fas fa-edit"></i> Modifier
                                            </button>
                                            <form action="{{ route('admin.chiffres.destroy', $chiffre->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer ce chiffre ?')">
                                                    <i class="fas fa-trash"></i> Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Modifier Chiffre -->
                                <div class="modal fade" id="editChiffreModal{{ $chiffre->id }}" tabindex="-1" aria-labelledby="editChiffreModalLabel{{ $chiffre->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('admin.chiffres.update', $chiffre->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editChiffreModalLabel{{ $chiffre->id }}">Modifier le chiffre clé</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Icon</label>
                                                        <input type="text" class="form-control" name="icon" value="{{ $chiffre->icon }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Valeur</label>
                                                        <input type="text" class="form-control" name="value" value="{{ $chiffre->value }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <input type="text" class="form-control" name="label" value="{{ $chiffre->label }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Modal d'ajout d'un chiffre dynamique -->
                        <div class="modal fade" id="addChiffreModal" tabindex="-1" aria-labelledby="addChiffreModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('admin.chiffres.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addChiffreModalLabel">Ajouter un chiffre clé</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Icon</label>
                                                <input type="text" class="form-control" name="icon" placeholder="ex: fas fa-money-bill-wave" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Valeur</label>
                                                <input type="text" class="form-control" name="value" placeholder="ex: 600+M" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <input type="text" class="form-control" name="label" placeholder="ex: Chiffre d'affaires (en millions de dirhams)" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div id="aboutSection-certifications" style="display:none;">
                        <p>Contenu de la section "Certifications".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS for switching content -->
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('#aboutNav .nav-link');
        const sections = [
            'apropos', 'motdg', 'valeurs', 'chiffres', 'certifications'
        ];
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                // Remove active from all
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                // Hide all sections
                sections.forEach(sec => {
                    document.getElementById('aboutSection-' + sec).style.display = 'none';
                });
                // Show selected section
                const section = this.getAttribute('data-section');
                document.getElementById('aboutSection-' + section).style.display = 'block';
                // Change title
                document.getElementById('aboutTitle').textContent = this.textContent;
            });
        });
    });
</script>
@endpush
@endsection