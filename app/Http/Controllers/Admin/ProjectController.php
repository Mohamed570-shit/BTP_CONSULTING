@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Nos Projets par Domaine d'Expertise</h2>
        
        <!-- Filtres des domaines -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="filter-container p-3 bg-light rounded shadow-sm">
                    <h5 class="mb-3">Filtrer par domaine</h5>
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-sm btn-primary filter-btn active" data-filter="all">Tous les domaines</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Bâtiments & Structures">Bâtiments & Structures</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Béton Armé & Charpentes Spéciales">Béton Armé & Charpentes</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Ouvrages Souterrains">Ouvrages Souterrains</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Ouvrages d'Art">Ouvrages d'Art</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Géotechnique Appliquée">Géotechnique Appliquée</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Fluides de Bâtiment & Réseaux de Bâtiments">Fluides de Bâtiment</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Assainissement & Drainage Urbain">Assainissement & Drainage</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Traitement & Réutilisation des Eaux">Traitement des Eaux</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Réseaux d'Eau Potable & Distribution">Réseaux d'Eau Potable</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Gestion des Risques Hydrologiques">Risques Hydrologiques</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Études et Conception de Stations de Pompage">Stations de Pompage</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Études d'Impact Environnemental (EIE)">Études d'Impact Environnemental</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Audits & Certifications Environnementales">Audits Environnementaux</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Écologie Urbaine & Paysagère">Écologie Urbaine</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Aménagement Rural Intégré">Aménagement Rural</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Petite et Moyenne Hydraulique (PMH)">PMH</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Aménagements Hydro-Agricoles">Aménagements Hydro-Agricoles</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Traitement des Ressources en Eau">Ressources en Eau</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Irrigation Avancée">Irrigation Avancée</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Aménagement Urbain Durable">Aménagement Urbain</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Réseaux Secs & Électricité Urbaine">Réseaux & Électricité</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Ingénierie Économique & Financière">Ingénierie Économique</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="BIM & Ingénierie Digitale">BIM & Ingénierie Digitale</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Infrastructures Hydrauliques Routières">Infrastructures Hydrauliques</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Pistes & Routes Non Classées">Pistes & Routes</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Routes Classées">Routes Classées</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Ouvrages Hydrauliques Routiers">Ouvrages Hydrauliques</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Smart City & Smart Building">Smart City</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Éco-Conception & Ingénierie Bas Carbone">Éco-Conception</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Intelligence Artificielle & Automatisation des Études">IA & Automatisation</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Levés Topographiques & Bathymétriques">Levés Topographiques</button>
                        <button class="btn btn-sm btn-outline-primary filter-btn" data-filter="Implantation & Récolement d'Ouvrages">Implantation d'Ouvrages</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Projets -->
        <div class="row" id="projects-container">
            <!-- Projet 1 - Bâtiments & Structures -->
            <div class="col-md-4 mb-4 project-card" data-domaine="Bâtiments & Structures">
                <div class="card h-100 shadow-sm hover-shadow">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400?text=Projet+Bâtiment" class="card-img-top" alt="Projet Bâtiment">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">Bâtiments & Structures</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Immeuble Résidentiel Moderne</h5>
                        <p class="card-text">Construction d'un immeuble résidentiel de 10 étages avec des technologies modernes et durables.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Terminé en 2023</small>
                            <button class="btn btn-sm btn-outline-primary">Voir détails</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Projet 2 - Béton Armé & Charpentes Spéciales -->
            <div class="col-md-4 mb-4 project-card" data-domaine="Béton Armé & Charpentes Spéciales">
                <div class="card h-100 shadow-sm hover-shadow">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400?text=Projet+Béton" class="card-img-top" alt="Projet Béton">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">Béton Armé & Charpentes Spéciales</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Structure Complexe Stade</h5>
                        <p class="card-text">Conception et réalisation de la structure en béton armé pour un stade de 30,000 places.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">En cours</small>
                            <button class="btn btn-sm btn-outline-primary">Voir détails</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Projet 3 - Ouvrages Souterrains -->
            <div class="col-md-4 mb-4 project-card" data-domaine="Ouvrages Souterrains">
                <div class="card h-100 shadow-sm hover-shadow">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400?text=Projet+Souterrain" class="card-img-top" alt="Projet Souterrain">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">Ouvrages Souterrains</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tunnel Routier Urbain</h5>
                        <p class="card-text">Conception et suivi de réalisation d'un tunnel routier de 2km en milieu urbain dense.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Terminé en 2022</small>
                            <button class="btn btn-sm btn-outline-primary">Voir détails</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Projet 4 - Ouvrages d'Art -->
            <div class="col-md-4 mb-4 project-card" data-domaine="Ouvrages d'Art">
                <div class="card h-100 shadow-sm hover-shadow">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400?text=Projet+Pont" class="card-img-top" alt="Projet Pont">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">Ouvrages d'Art</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pont à Haubans</h5>
                        <p class="card-text">Étude et conception d'un pont à haubans de 500m de portée sur un fleuve majeur.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Terminé en 2021</small>
                            <button class="btn btn-sm btn-outline-primary">Voir détails</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Projet 5 - Hydraulique -->
            <div class="col-md-4 mb-4 project-card" data-domaine="Traitement & Réutilisation des Eaux">
                <div class="card h-100 shadow-sm hover-shadow">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400?text=Projet+Eau" class="card-img-top" alt="Projet Eau">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">Traitement & Réutilisation des Eaux</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Station d'Épuration Écologique</h5>
                        <p class="card-text">Conception d'une station d'épuration utilisant des procédés écologiques pour une ville de 50,000 habitants.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">En cours</small>
                            <button class="btn btn-sm btn-outline-primary">Voir détails</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Projet 6 - Smart City -->
            <div class="col-md-4 mb-4 project-card" data-domaine="Smart City & Smart Building">
                <div class="card h-100 shadow-sm hover-shadow">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400?text=Projet+Smart+City" class="card-img-top" alt="Projet Smart City">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-primary">Smart City & Smart Building</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Quartier Intelligent</h5>
                        <p class="card-text">Conception d'un quartier intelligent avec gestion automatisée de l'énergie et des ressources.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Terminé en 2023</small>
                            <button class="btn btn-sm btn-outline-primary">Voir détails</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        transition: all 0.3s ease;
    }
    
    .filter-container {
        border-left: 4px solid #0d6efd;
    }
    
    .filter-btn {
        transition: all 0.2s;
    }
    
    .filter-btn.active {
        font-weight: bold;
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Filtrage des projets par domaine
        $('.filter-btn').on('click', function() {
            // Active button styling
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            
            var filter = $(this).data('filter');
            
            if (filter === 'all') {
                // Show all projects
                $('.project-card').show();
            } else {
                // Hide all projects
                $('.project-card').hide();
                // Show only projects with matching domain
                $('.project-card[data-domaine="' + filter + '"]').show();
            }
        });
    });
</script>
@endpush