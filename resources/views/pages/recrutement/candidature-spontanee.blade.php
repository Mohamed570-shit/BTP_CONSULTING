@extends('layouts.app')

@section('title', 'Candidature Spontanée')

@section('content')
<style>
    .bg-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/5d/83/72/5d83726870c7d76cb2eeefda20143bd4.jpg');
        background-size: cover;
        background-position: center;
    }
    
    /* Style amélioré pour Select2 */
    .select2-container--default .select2-selection--single {
        height: 38px;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #212529;
        line-height: 1.5;
        padding-left: 0;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 36px;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px;
    }
    
    .select2-container--default .select2-search--dropdown .select2-search__field {
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        padding: 0.375rem 0.75rem;
    }
    
    .select2-dropdown {
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }
    
    /* Amélioration des messages d'erreur */
    .text-danger {
        display: block;
        margin-top: 5px;
        font-size: 0.875rem;
    }
    
    /* Suppression des lignes rouges de l'éditeur */
    .form-control.is-invalid,
    .was-validated .form-control:invalid {
        border-color: #ced4da;
        background-image: none;
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

                <form action="{{ route('candidature.store') }}" method="POST" enctype="multipart/form-data" novalidate>
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
                            <option value="Aucun poste">Aucun poste spécifique</option>
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
                    
                    <!-- Domaine avec recherche -->
                    <div class="mb-4">
                        <select name="domaine" class="form-control select2-domaine" id="domaine-select" required>
                            <option value="">Choisissez votre domaine</option>
                            <option value="Génie Civil" {{ old('domaine') == 'Génie Civil' ? 'selected' : '' }}>Génie Civil</option>
                            <option value="Architecture" {{ old('domaine') == 'Architecture' ? 'selected' : '' }}>Architecture</option>
                            <option value="Topographie" {{ old('domaine') == 'Topographie' ? 'selected' : '' }}>Topographie</option>
                            <option value="Hydraulique" {{ old('domaine') == 'Hydraulique' ? 'selected' : '' }}>Hydraulique</option>
                            <option value="Électricité du bâtiment" {{ old('domaine') == 'Électricité du bâtiment' ? 'selected' : '' }}>Électricité du bâtiment</option>
                            <option value="Plomberie" {{ old('domaine') == 'Plomberie' ? 'selected' : '' }}>Plomberie</option>
                            <option value="Géotechnique" {{ old('domaine') == 'Géotechnique' ? 'selected' : '' }}>Géotechnique</option>
                            <option value="Gestion de projets BTP" {{ old('domaine') == 'Gestion de projets BTP' ? 'selected' : '' }}>Gestion de projets BTP</option>
                            <option value="Développement immobilier" {{ old('domaine') == 'Développement immobilier' ? 'selected' : '' }}>Développement immobilier</option>
                            <option value="Environnement et développement durable" {{ old('domaine') == 'Environnement et développement durable' ? 'selected' : '' }}>Environnement et développement durable</option>
                            <option value="Sécurité et santé sur chantier" {{ old('domaine') == 'Sécurité et santé sur chantier' ? 'selected' : '' }}>Sécurité et santé sur chantier</option>
                            <option value="Autre" {{ old('domaine') == 'Autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                        @error('domaine')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Champ pour préciser un autre domaine (initialement caché) -->
                    <div class="mb-4" id="autre-domaine-div" style="display: {{ old('domaine') == 'Autre' ? 'block' : 'none' }};">
                        <input type="text" name="autre_domaine" id="autre-domaine-input" class="form-control" placeholder="Précisez votre domaine" value="{{ old('autre_domaine') }}">
                        @error('autre_domaine')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Type de candidature (Emploi ou Stage) -->
                    <div class="mb-4">
                        <label class="form-label">Type de candidature</label>
                        <div class="d-flex">
                            <div class="form-check me-4">
                                <input class="form-check-input" type="radio" name="type" id="emploi" value="emploi" {{ old('type') == 'emploi' ? 'checked' : '' }} required>
                                <label class="form-check-label" for="emploi">
                                    Emploi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="stage" value="stage" {{ old('type') == 'stage' ? 'checked' : '' }}>
                                <label class="form-check-label" for="stage">
                                    Stage
                                </label>
                            </div>
                        </div>
                        @error('type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Diplôme - Modifié pour accepter un fichier -->
                    <div class="mb-4">
                        <label class="form-label">Ajouter votre Diplôme</label>
                        <input type="file" name="diplome" class="form-control" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required>
                        @error('diplome')
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

@push('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        // Configuration de Select2 pour le domaine
        $('.select2-domaine').select2({
            placeholder: "Choisissez votre domaine",
            allowClear: true,
            width: '100%',
            language: {
                noResults: function() {
                    return "Aucun résultat trouvé";
                },
                searching: function() {
                    return "Recherche en cours...";
                }
            }
        });
        
        // Focus sur le champ de recherche dès l'ouverture du select
        $('.select2-domaine').on('select2:open', function() {
            setTimeout(function() {
                $('.select2-search__field').focus();
            }, 100);
        });
        
        // Mise en gras de l'option "Aucun poste"
        $('select[name="post"] option[value="Aucun poste"]').css('font-weight', 'bold');
        
        // Gestion de l'affichage du champ "autre domaine"
        $('#domaine-select').on('change', function() {
            if ($(this).val() === 'Autre') {
                $('#autre-domaine-div').show();
                $('#autre-domaine-input').prop('required', true);
            } else {
                $('#autre-domaine-div').hide();
                $('#autre-domaine-input').prop('required', false);
            }
        });
        
        // Vérifier l'état initial au chargement de la page
        if ($('#domaine-select').val() === 'Autre') {
            $('#autre-domaine-div').show();
            $('#autre-domaine-input').prop('required', true);
        }
        
        // Suppression des lignes rouges de validation HTML5
        $('input, select, textarea').on('invalid', function() {
            $(this).css('border-color', '#ced4da');
            return true;
        });
    });
</script>
<style>
    /* Style pour que Select2 ressemble aux autres inputs */
    .select2-container .select2-selection--single {
        height: 38px;
        padding: 6px 12px;
        font-size: 1rem;
        line-height: 1.5;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 24px;
        padding-left: 0;
    }
    
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 36px;
    }
    
    .select2-dropdown {
        border: 1px solid #ced4da;
    }
    
    .select2-search__field {
        padding: 6px 8px;
        border: 1px solid #ced4da !important;
    }
    
    /* Suppression des styles de validation par défaut du navigateur */
    input:invalid, select:invalid, textarea:invalid {
        box-shadow: none !important;
        outline: none !important;
    }
    
    /* Style personnalisé pour les messages d'erreur */
    .text-danger {
        color: #dc3545 !important;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }
</style>
@endpush
@endsection