@extends('layouts.app')

@section('content')
<div class="container py-5">
    {{-- Professional Header Section --}}
    <div class="page-header-section d-flex align-items-center justify-content-between mb-5 p-4 rounded" style="background: linear-gradient(to right, #f8f9fa, #e9ecef);">
        <h2 class="display-5 fw-bold text-dark">Nos Projets par Domaine</h2>
        {{-- Placeholder for AI Image with Logo --}}
        <img src="placeholder-ai-logo-image.png" alt="BTP Consulting AI Representation" style="height: 80px; width: auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        {{-- Replace 'placeholder-ai-logo-image.png' with the actual path to your image --}}
    </div>

    <div class="row">
        <!-- Sidebar Filter -->
        <div class="col-lg-3 mb-4 mb-lg-0">
            <div class="sticky-top" style="top: 20px;"> {{-- Optional: Makes sidebar sticky --}}
                <h5 class="mb-3">Filtrer par Domaine</h5>
                <div class="list-group list-group-flush" id="domaines-filter-sidebar">
                    <a href="#" class="list-group-item list-group-item-action active" data-domaine="all">Tous les Domaines</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Bâtiments & Structures">Bâtiments & Structures</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Béton Armé & Charpentes Spéciales">Béton Armé & Charpentes Spéciales</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Ouvrages Souterrains">Ouvrages Souterrains</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Ouvrages d’Art">Ouvrages d’Art</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Géotechnique Appliquée">Géotechnique Appliquée</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Fluides de Bâtiment & Réseaux de Bâtiments">Fluides de Bâtiment & Réseaux de Bâtiments</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Assainissement & Drainage Urbain">Assainissement & Drainage Urbain</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Traitement & Réutilisation des Eaux">Traitement & Réutilisation des Eaux</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Réseaux d’Eau Potable & Distribution">Réseaux d’Eau Potable & Distribution</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Gestion des Risques Hydrologiques">Gestion des Risques Hydrologiques</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Études et Conception de Stations de Pompage">Études et Conception de Stations de Pompage</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Études d’Impact Environnemental (EIE)">Études d’Impact Environnemental (EIE)</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Audits & Certifications Environnementales">Audits & Certifications Environnementales</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Écologie Urbaine & Paysagère">Écologie Urbaine & Paysagère</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Aménagement Rural Intégré">Aménagement Rural Intégré</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Petite et Moyenne Hydraulique (PMH)">Petite et Moyenne Hydraulique (PMH)</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Aménagements Hydro-Agricoles">Aménagements Hydro-Agricoles</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Traitement des Ressources en Eau">Traitement des Ressources en Eau</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Irrigation Avancée">Irrigation Avancée</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Aménagement Urbain Durable">Aménagement Urbain Durable</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Réseaux Secs & Électricité Urbaine">Réseaux Secs & Électricité Urbaine</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Ingénierie Économique & Financière">Ingénierie Économique & Financière</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="BIM & Ingénierie Digitale">BIM & Ingénierie Digitale</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Infrastructures Hydrauliques Routières">Infrastructures Hydrauliques Routières</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Pistes & Routes Non Classées">Pistes & Routes Non Classées</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Routes Classées">Routes Classées</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Ouvrages Hydrauliques Routiers">Ouvrages Hydrauliques Routiers</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Smart City & Smart Building">Smart City & Smart Building</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Éco-Conception & Ingénierie Bas Carbone">Éco-Conception & Ingénierie Bas Carbone</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Intelligence Artificielle & Automatisation des Études">Intelligence Artificielle & Automatisation des Études</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Levés Topographiques & Bathymétriques">Levés Topographiques & Bathymétriques</a>
                    <a href="#" class="list-group-item list-group-item-action" data-domaine="Implantation & Récolement d’Ouvrages">Implantation & Récolement d’Ouvrages</a>
                </div>
            </div>
        </div>

        <!-- Cards Grid -->
        // ... existing code above ...

    <div class="col-lg-9">
        <div class="row g-4" id="projets-list">
            @foreach($projets as $projet)
            <div class="col-md-6 col-xl-4">
                <button type="button"
                    class="card h-100 shadow-sm border-0 overflow-hidden w-100 text-start projet-card-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#projetModal"
                    data-id="{{ $projet->id }}"
                    data-title="{{ $projet->title }}"
                    data-image="{{ $projet->image }}"
                    data-domaine="{{ $projet->domaine }}"
                    data-description="{{ $projet->description }}"
                    data-x="{{ $projet->localisation_x }}"
                    data-y="{{ $projet->localisation_y }}"
                    >
                    <img src="{{ $projet->image }}" class="card-img-top" alt="Projet {{ $projet->title }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $projet->title }}</h5>
                        <span class="badge bg-light text-primary align-self-start mt-2">{{ $projet->domaine }}</span>
                    </div>
                </button>
            </div>
            @endforeach
        </div>
    </div>

// ... existing code below ...

{{-- Modal for project details --}}
<div class="modal fade" id="projetModal" tabindex="-1" aria-labelledby="projetModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0 pb-0">
        <h4 class="modal-title w-100 text-center" id="projetModalLabel"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        <img id="modalProjetImage" src="" class="img-fluid rounded mb-3 w-100" style="max-height:350px;object-fit:cover;">
        <div class="mb-2">
            <span class="badge bg-primary" id="modalProjetDomaine"></span>
        </div>
        <p id="modalProjetDescription" class="mb-2"></p>
        <div class="mb-3">
            <strong>Localisation:</strong>
            <span id="modalProjetCoords"></span>
        </div>
        <hr>
        <div>
            <h6>Autres projets dans le même domaine :</h6>
            <div id="modalRelatedProjects" class="row g-2"></div>
        </div>
      </div>
    </div>
  </div>
</div>



// ... existing styles ...
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Initial animation for cards
        $('.projet-card').hide().each(function(i) {
            $(this).delay(i * 100).fadeIn(300);
        });

        // Sidebar filter click event
        $('#domaines-filter-sidebar .list-group-item').on('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            // Update active state in sidebar
            $('#domaines-filter-sidebar .list-group-item').removeClass('active');
            $(this).addClass('active');

            var domaine = $(this).data('domaine');

            // Filter projects with animation
            if (domaine === 'all') {
                $('.projet-card').fadeOut(150, function() {
                    $(this).fadeIn(150);
                });
            } else {
                $('.projet-card').fadeOut(150);
                $('.projet-card[data-domaine="' + domaine + '"]').fadeIn(150);
            }
        });
        // Initial animation for cards
        $('.projet-card').hide().each(function(i) {
            $(this).delay(i * 100).fadeIn(300);
        });

        // Sidebar filter click event
        $('#domaines-filter-sidebar .list-group-item').on('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            // Update active state in sidebar
            $('#domaines-filter-sidebar .list-group-item').removeClass('active');
            $(this).addClass('active');

            var domaine = $(this).data('domaine');

            // Filter projects with animation
            if (domaine === 'all') {
                $('.projet-card').fadeOut(150, function() {
                    $(this).fadeIn(150);
                });
            } else {
                $('.projet-card').fadeOut(150);
                $('.projet-card[data-domaine="' + domaine + '"]').fadeIn(150);
            }
        });
    });
</script>

@endpush

@push('styles')
<style>
    /* Style for the new header section */
    .page-header-section {
        border-left: 5px solid #fd7e14; /* Example accent color (orange) */
    }

    /* Optional: Style for the active filter link in the sidebar */
    #domaines-filter-sidebar .list-group-item.active {
        background-color: #fd7e14; /* Use your theme's primary/accent color */
        border-color: #fd7e14;
        color: white;
        font-weight: 500;
    }
    #domaines-filter-sidebar .list-group-item {
        border-left: 0;
        border-right: 0;
        border-radius: 0; /* Optional: remove border radius for flush look */
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        font-size: 0.9rem; /* Slightly smaller font for sidebar */
        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out; /* Add transition for hover */
    }
     #domaines-filter-sidebar .list-group-item:not(.active):hover {
        background-color: #f8f9fa; /* Light background on hover for non-active items */
        color: #000; /* Darker text on hover */
    }
     #domaines-filter-sidebar .list-group-item:first-child {
        border-top: 0;
    }
     #domaines-filter-sidebar .list-group-item:last-child {
        border-bottom: 0;
    }

    /* Card styles (kept from previous version) */
    .projet-card .card-img-top {
        aspect-ratio: 16 / 10;
        object-fit: cover;
    }
    .projet-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .projet-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    /* Adjust card columns for better spacing with sidebar */
    /* col-md-6 (2 cards on medium), col-xl-4 (3 cards on extra large) */
</style>
@endpush