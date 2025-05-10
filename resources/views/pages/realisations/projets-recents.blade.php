@extends('layouts.app')

@push('styles')
    <style>
        :root {
            --primary-color:rgb(20, 8, 252); /* indigo-600 */
            --accent-color: #a78bfa;  /* violet-400 */
            --text-color: #1f2937;
            --muted-color: #6b7280;
            --bg-light: #f3f4f6;
            --bg-white: #ffffff;
            --border-color: #e5e7eb;
            --radius: 1rem;
            --transition: all 0.3s ease;
            --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        body {
            background: var(--bg-light);
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
        }

        .bgtop-btp {
            background: linear-gradient(to right,rgb(241, 241, 244), #fdfdff);
            height: 99px;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
            box-shadow: var(--shadow-lg);
        }

        #domainSidebar {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border-radius: var(--radius);
            box-shadow: var(--shadow-lg);
            padding: 1.25rem;
        }

        #domainSidebar .list-group-item {
            border: none;
            border-radius: 12px;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            transition: var(--transition);
            color: var(--text-color);
        }

        #domainSidebar .list-group-item:hover,
        #domainSidebar .list-group-item.active {
            background-color: var(--primary-color);
            color: #ffffff;
            font-weight: 600;
        }

        #searchDomainInput {
            border-radius: 0.75rem;
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
            border: 1px solid var(--border-color);
            transition: var(--transition);
        }

        #searchDomainInput:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        .header-content-page h2 {
            color: var(--primary-color);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .project-card .card {
            background-color: var(--bg-white);
            border-radius: var(--radius);
            overflow: hidden;
            transition: var(--transition);
            border: 1px solid var(--border-color);
        }

        .project-card .card:hover {
            transform: scale(1.02);
            box-shadow: var(--shadow-lg);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid var(--border-color);
        }

        .card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-color);
        }

        .btn-outline-primary {
            border-color: var(--primary-color);
            color: var(--primary-color);
            border-radius: 0.75rem;
            transition: var(--transition);
        }
        .btn-voir-detail {
    background-color: transparent;
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
    border-radius: 0.75rem;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
}

.btn-voir-detail:hover {
    background-color: var(--primary-color);
    color: #fff;
    box-shadow: 0 5px 15px rgba(79, 70, 229, 0.3);
    transform: translateY(-2px);
}

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }
/* Style pour le modal */
.modal-content {
    border-radius: 1rem;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    border: none;
    overflow: hidden;
}

.modal-header {
    background-color: var(--primary-color);
    color: #fff;
    border-bottom: none;
    padding: 1rem 1.5rem;
}

.modal-header .btn-close {
    filter: invert(1);
}

.modal-title {
    font-weight: 600;
    font-size: 1.25rem;
}

.modal-body {
    padding: 2rem;
    background-color: #f9f9f9;
}

.modal-body img {
    border-radius: 0.5rem;
    max-height: 300px;
    object-fit: cover;
}

#modalProjectDomain {
    font-size: 0.85rem;
    padding: 0.4rem 0.75rem;
    border-radius: 20px;
}

#modalProjectDescription {
    font-size: 1rem;
    color: #333;
    margin-top: 1rem;
    margin-bottom: 2rem;
}

#modalProjectMap {
    margin-bottom: 2rem;
    border: 1px solid #ddd;
    border-radius: 0.5rem;
    overflow: hidden;
}

#modalSimilarProjects {
    margin-top: 1rem;
}

#modalSimilarProjects .list-group-item {
    border: none;
    padding: 0.75rem 1rem;
    font-size: 0.9rem;
    background-color: #fff;
    border-radius: 0.5rem;
    margin-bottom: 0.5rem;
    transition: background-color 0.3s ease;
}

#modalSimilarProjects .list-group-item:hover {
    background-color: #f0f0f0;
}

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card-img-top {
                height: 160px;
            }

            .card-title {
                font-size: 1rem;
            }

            .bgtop-btp {
                height: 100px;
                border-radius: 0 0 30px 30px;
            }
        }
    </style>
@endpush


@section('content')
    <!-- Header Background -->
    <div class="bgtop-btp"></div>

    <!-- Main Content -->
    <div class="container-fluid pt-5" style="position: relative; z-index: 2;">
        <div class="row">
            <!-- Sidebar Domains -->
            <div class="col-md-3 mb-4">
                <div class="list-group sticky-top" id="domainSidebar">
                    <input type="text" id="searchDomainInput" class="form-control mb-2" placeholder="Rechercher un domaine...">
                    <button class="list-group-item list-group-item-action active" data-domain="all">Tous les domaines</button>

                    @foreach($domains as $domain)
    <button class="list-group-item list-group-item-action" data-domain="{{ Str::slug($domain->title) }}">
        {{ $domain->title }}
    </button>
@endforeach

                </div>
            </div>

            <!-- Projects Cards -->
            <div class="col-md-9">
                <div class="header-content-page mb-4">
                    <h2 class="fw-bold">Nos Projets Récents</h2>
                </div>
                <div class="row" id="projectsList">
                    @foreach($projects as $project)
                        <div class="col-md-4 mb-4 project-card" data-domain="{{ Str::slug($project->domaine) }}">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ $project->image ? url('/secure-image/'.$project->id) : 'https://via.placeholder.com/400x250?text=Projet' }}"
                                     class="card-img-top" alt="{{ $project->titre }}">
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

    <!-- Project Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel">Titre du projet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body text-center">

                <!-- Image du projet -->
                <img id="modalProjectImage" src="" class="img-fluid mb-3 rounded shadow-sm" alt="Image projet">
<!-- Description -->
<p id="modalProjectDescription" class="mb-4 text-muted">Description du projet ici...</p>

                <!-- Domaine -->

                <!-- Localisation / Map -->
                <div id="modalProjectMap" class="mb-4" style="height: 300px; border-radius: 10px; overflow: hidden;"></div>

                <!-- Autres projets similaires -->
                <h6 class="mt-4 mb-2">Autres projets dans le même domaine :</h6>
                <ul id="modalSimilarProjects" class="list-group"></ul>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function () {
            // Domain Search
            $('#searchDomainInput').on('keyup', function () {
                const search = $(this).val().toLowerCase().trim();
                $('#domainSidebar .list-group-item').each(function () {
                    if ($(this).data('domain') === 'all') {
                        $(this).show();
                        return;
                    }
                    const text = $(this).text().toLowerCase();
                    $(this).toggle(text.includes(search));
                });
            });

            // Sidebar Filter
            $('#domainSidebar .list-group-item').on('click', function () {
                $('#domainSidebar .list-group-item').removeClass('active');
                $(this).addClass('active');
                const domain = $(this).data('domain').toLowerCase().trim();

                $('.project-card').each(function () {
                    const cardDomain = $(this).data('domain')?.toLowerCase().trim();
                    $(this).toggle(domain === 'all' || cardDomain === domain);
                });
            });

            // Load Project Modal
            $(document).on('click', '.show-project-modal, .similar-project-item', function () {
                loadProjectModal($(this).data('id'));
            });

            function loadProjectModal(id) {
                axios.get(`/ajax/projet/${id}`)
                    .then(({ data: projet }) => {
                        $('#projectModalLabel').text(projet.titre);
                        $('#modalProjectDescription').text(projet.description);
                        $('#modalProjectImage').attr('src', projet.image || 'https://via.placeholder.com/400x250?text=Projet');
                        $('#modalProjectDomain').text(projet.domaine);

                        // Map Integration
                        $('#modalProjectMap').html(projet.x && projet.y
                            ? `<iframe width="100%" height="250" frameborder="0" style="border:0" src="https://maps.google.com/maps?q=${projet.x},${projet.y}&z=15&output=embed" allowfullscreen></iframe>`
                            : '<em>Localisation non disponible</em>'
                        );

                        // Similar Projects
                        const similarHtml = projet.similar?.length
                            ? projet.similar.map(p => `
                                <li class="list-group-item d-flex align-items-center similar-project-item" data-id="${p.id}">
                                    <img src="${p.image ? '/secure-image/' + p.id : 'https://via.placeholder.com/60x40?text=Projet'}"
                                         alt="" style="width:60px;height:40px;object-fit:cover;margin-right:10px;">
                                    <span>${p.titre}</span>
                                </li>`).join('')
                            : '<li class="list-group-item">Aucun autre projet dans ce domaine.</li>';

                        $('#modalSimilarProjects').html(similarHtml);

                        // Show Modal
                        const modal = new bootstrap.Modal('#projectModal');
                        modal.show();
                    })
                    .catch(() => alert('Erreur lors du chargement du projet'));
            }
        });
    </script>
@endpush
