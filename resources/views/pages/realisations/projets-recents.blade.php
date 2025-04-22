
@extends('layouts.app')

@section('content')
<div class="bgtop-btp"></div>
<div class="container-fluid pt-5" style="position:relative; z-index:2;">
    <div class="row">
        <!-- Sidebar Domains -->
        <div class="col-md-3 mb-4">
            <div class="list-group sticky-top" id="domainSidebar" style="top:100px;">
                <input type="text" id="searchDomainInput" class="form-control mb-2" placeholder="Rechercher un domaine...">
                <button class="list-group-item list-group-item-action active" data-domain="all">Tous les domaines</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Bâtiments & Structures') }}">Bâtiments & Structures</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Béton Armé & Charpentes Spéciales') }}">Béton Armé & Charpentes Spéciales</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Ouvrages Souterrains') }}">Ouvrages Souterrains</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Ouvrages dArt') }}">Ouvrages d'Art</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Géotechnique Appliquée') }}">Géotechnique Appliquée</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Fluides de Bâtiment & Réseaux de Bâtiments') }}">Fluides de Bâtiment & Réseaux de Bâtiments</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Assainissement & Drainage Urbain') }}">Assainissement & Drainage Urbain</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Traitement & Réutilisation des Eaux') }}">Traitement & Réutilisation des Eaux</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Réseaux dEau Potable & Distribution') }}">Réseaux d'Eau Potable & Distribution</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Gestion des Risques Hydrologiques') }}">Gestion des Risques Hydrologiques</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Études et Conception de Stations de Pompage') }}">Études et Conception de Stations de Pompage</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Études dImpact Environnemental (EIE)') }}">Études d'Impact Environnemental (EIE)</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Audits & Certifications Environnementales') }}">Audits & Certifications Environnementales</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Écologie Urbaine & Paysagère') }}">Écologie Urbaine & Paysagère</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Aménagement Rural Intégré') }}">Aménagement Rural Intégré</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Petite et Moyenne Hydraulique (PMH)') }}">Petite et Moyenne Hydraulique (PMH)</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Aménagements Hydro-Agricoles') }}">Aménagements Hydro-Agricoles</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Traitement des Ressources en Eau') }}">Traitement des Ressources en Eau</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Irrigation Avancée') }}">Irrigation Avancée</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Aménagement Urbain Durable') }}">Aménagement Urbain Durable</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Réseaux Secs & Électricité Urbaine') }}">Réseaux Secs & Électricité Urbaine</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Ingénierie Économique & Financière') }}">Ingénierie Économique & Financière</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('BIM & Ingénierie Digitale') }}">BIM & Ingénierie Digitale</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Infrastructures Hydrauliques Routières') }}">Infrastructures Hydrauliques Routières</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Pistes & Routes Non Classées') }}">Pistes & Routes Non Classées</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Routes Classées') }}">Routes Classées</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Ouvrages Hydrauliques Routiers') }}">Ouvrages Hydrauliques Routiers</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Smart City & Smart Building') }}">Smart City & Smart Building</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Éco-Conception & Ingénierie Bas Carbone') }}">Éco-Conception & Ingénierie Bas Carbone</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Intelligence Artificielle & Automatisation des Études') }}">Intelligence Artificielle & Automatisation des Études</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Levés Topographiques & Bathymétriques') }}">Levés Topographiques & Bathymétriques</button>
                <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug('Implantation & Récolement dOuvrages') }}">Implantation & Récolement d'Ouvrages</button>
            </div>
        </div>
        <!-- Projects Cards -->
        <div class="col-md-9">
            <div class="header-content-page mb-4">
                <h2 class="fw-bold" style="color:#0d6efd;">Nos Projets Récents</h2>
                <p class="mb-0" style="color:#444;">Découvrez nos réalisations par domaine de compétence</p>
            </div>
            <div class="row" id="projectsList" >
                @foreach($projects as $project)
                    <div class="col-md-4 mb-4 project-card" data-domain="{{ Str::slug($project->domaine) }}">
                        <div class="card h-100 shadow-sm">
                        <img src="{{ $project->image ? url('/secure-image/'.$project->id) : 'https://via.placeholder.com/400x250?text=Projet' }}" class="card-img-top" alt="{{ $project->titre }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->titre }}</h5>
                                <span class="badge bg-primary mb-2">{{ $project->domaine }}</span>
                                <button class="btn btn-outline-primary btn-sm mt-2 w-100 show-project-modal"
                                    data-id="{{ $project->id }}">
                                    Voir détails
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Modal  -->
        <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalProjectImage" src="" class="img-fluid mb-3" alt="Image projet" style="max-height:250px;">
                <span class="badge bg-primary mb-2" id="modalProjectDomain"></span>
                <p id="modalProjectDescription"></p>
                <div id="modalProjectMap" style="width:100%;height:250px;margin-bottom:15px;"></div>
                <h6>Autres projets dans le même domaine :</h6>
                <ul id="modalSimilarProjects" class="list-group"></ul>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function() {
        // Recherche domaine (filter sidebar buttons)
    $('#searchDomainInput').on('keyup', function() {
        var search = $(this).val().toLowerCase().trim();
        $('#domainSidebar .list-group-item').each(function() {
            // Always show "Tous les domaines"
            if ($(this).data('domain') === 'all') {
                $(this).show();
                return;
            }
            var text = $(this).text().toLowerCase();
            if (text.indexOf(search) !== -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
        // Sidebar filter
        $('#domainSidebar .list-group-item').on('click', function() {
            $('#domainSidebar .list-group-item').removeClass('active');
            $(this).addClass('active');
            var domain = $(this).data('domain').toLowerCase().trim();
            console.log('Selected domain:', domain); // Debug
            if(domain === 'all') {
                $('.project-card').show();
            } else {
                $('.project-card').each(function() {
                    var cardDomain = $(this).data('domain');
                    console.log('Card domain:', cardDomain); // Debug
                    if(cardDomain && cardDomain.toLowerCase().trim() === domain) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    }
);
        // Attach modal loader to main project cards
        $('.show-project-modal').on('click', function() {
            loadProjectModal($(this).data('id'));
        });

        // Function to load project details in modal
        function loadProjectModal(id) {
            axios.get('/ajax/projet/' + id)
                .then(function(response) {
                    var projet = response.data;
                    $('#projectModalLabel').text(projet.titre);
                    $('#modalProjectDescription').text(projet.description);
                    $('#modalProjectImage').attr('src', projet.image ? projet.image : 'https://via.placeholder.com/400x250?text=Projet');
                    $('#modalProjectDomain').text(projet.domaine);
                    // Show map (Google Maps)
                    if(projet.x && projet.y) {
                        var mapUrl = `https://maps.google.com/maps?q=${projet.x},${projet.y}&z=15&output=embed`;
                        $('#modalProjectMap').html(`<iframe width="100%" height="250" frameborder="0" style="border:0" src="${mapUrl}" allowfullscreen></iframe>`);
                    } else {
                        $('#modalProjectMap').html('<em>Localisation non disponible</em>');
                    }
                    // Similar projects
                    var similarHtml = '';
                    if(projet.similar && projet.similar.length > 0) {
                        projet.similar.forEach(function(p) {
                            similarHtml += `<li class="list-group-item d-flex align-items-center similar-project-item" data-id="${p.id}">
                                <img src="${p.image ? '/secure-image/' + p.id : 'https://via.placeholder.com/60x40?text=Projet'}" alt="" style="width:60px;height:40px;object-fit:cover;margin-right:10px;">
                                <span>${p.titre}</span>
                            </li>`;
                        });
                    } else {
                        similarHtml = '<li class="list-group-item">Aucun autre projet dans ce domaine.</li>';
                    }
                    $('#modalSimilarProjects').html(similarHtml);
                    // Hna: 7ell modal ghi ila ma kaynach m7oul
                    var $modal = $('#projectModal');
                    if (!$modal.hasClass('show')) {
                        var modal = new bootstrap.Modal(document.getElementById('projectModal'));
                        modal.show();
                    }
                    // Attach click event to similar projects (after html is set)
                    $('#modalSimilarProjects .similar-project-item').off('click').on('click', function() {
                        var newId = $(this).data('id');
                        loadProjectModal(newId);
                    });
                })
                .catch(function(error) {
                    alert('Erreur lors du chargement du projet');
                });
            }
</script>
@endpush

