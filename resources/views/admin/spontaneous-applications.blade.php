@extends('layouts.admin')

@section('title', 'Gestion des candidatures spontanées')

@section('content')
<div class="mb-3">
    <button class="btn btn-outline-primary me-2 filter-type active-type" data-type="emploi" id="btn-emploi">Emploi</button>
    <button class="btn btn-outline-primary filter-type" data-type="stage" id="btn-stage">Stage</button>
</div>
<div class="container-fluid py-4 admin-app-margin">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <button class="btn btn-outline-secondary me-2 filter-post active-type" data-post="all" id="btn-tous-postes">Tous les postes</button>
                <button class="btn btn-outline-info me-2 filter-post" data-post="Aucun poste" id="btn-aucun-poste">Aucun poste</button>
            </div>
            <div>
                <button class="btn btn-danger me-2" id="delete-selected">Supprimer</button>
                <button class="btn btn-success" id="export-selected">Exporter Excel</button>
            </div>
        </div>
        <div class="card-body row">
            <!-- Sidebar -->
            <div class="col-md-3 border-end">
                <div id="sidebar-domaines-section">
                    <h5>Filtrer par domaine</h5>
                    <ul class="list-group" id="sidebar-domaines">
                        <!-- Dynamically filled by JS -->
                    </ul>
                </div>
                <div id="sidebar-offres-section">
                    <h5>Offres Emploi</h5>
                    <ul class="list-group" id="sidebar-offres">
                        <!-- Dynamically filled by JS -->
                    </ul>
                </div>
            </div>
            <!-- Main Table -->
            <div class="col-md-9">
                <div id="candidatures-list">
                    <table class="table table-bordered table-hover" id="candidatures-table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="select-all"></th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Poste</th>
                                <th>Domaine</th>
                                <th>Type</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody id="candidatures-tbody">
                            @foreach($candidatures as $c)
                                <tr data-type="{{ $c->type }}" data-post="{{ $c->post }}" data-domaine="{{ $c->domaine }}" data-offre="{{ $c->post }}">
                                    <td><input type="checkbox" class="select-candidature" value="{{ $c->id }}"></td>
                                    <td>{{ $c->nom }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->telephone }}</td>
                                    <td>{{ $c->post }}</td>
                                    <td>{{ $c->domaine }}</td>
                                    <td>{{ ucfirst($c->type) }}</td>
                                    <td>{{ $c->created_at->format('Y-m-d') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div id="no-candidature" class="text-center" style="display:none;">Aucune candidature trouvée.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
let selectedType = 'emploi';
let selectedPost = 'all';
let selectedDomaine = '';
let selectedOffre = '';

// Collect all offers from the backend (Blade)
let allOffers = [];
@foreach($offres as $offre)
    allOffers.push(@json($offre->titre));
@endforeach

// Collect all domains for "Aucun poste" from backend (Blade)
let allDomainesAucunPoste = [];
@foreach($candidatures as $c)
    @if($c->post === 'Aucun poste' && $c->domaine)
        allDomainesAucunPoste.push(@json($c->domaine));
    @endif
@endforeach
allDomainesAucunPoste = Array.from(new Set(allDomainesAucunPoste)).sort();

function renderSidebarDomaines() {
    let sidebarDomaines = document.getElementById('sidebar-domaines');
    let html = '';
    if (selectedPost === 'Aucun poste') {
        html += `<li class="list-group-item filter-domaine${selectedDomaine === '' ? ' active' : ''}" data-domaine="">Tous les domaines</li>`;
        allDomainesAucunPoste.forEach(domaine => {
            html += `<li class="list-group-item filter-domaine${selectedDomaine === domaine ? ' active' : ''}" data-domaine="${domaine}">${domaine}</li>`;
        });
    }
    sidebarDomaines.innerHTML = html;
}

function renderSidebarOffres() {
    let sidebarOffres = document.getElementById('sidebar-offres');
    let html = `<li class="list-group-item filter-offre${selectedOffre === '' ? ' active' : ''}" data-offre="">Toutes les offres</li>`;
    allOffers.forEach(offre => {
        html += `<li class="list-group-item filter-offre${selectedOffre === offre ? ' active' : ''}" data-offre="${offre}">${offre}</li>`;
    });
    sidebarOffres.innerHTML = html;
}

function updateSidebar() {
    if (selectedPost === 'Aucun poste') {
        document.getElementById('sidebar-domaines-section').style.display = '';
        document.getElementById('sidebar-offres-section').style.display = 'none';
        renderSidebarDomaines();
    } else {
        document.getElementById('sidebar-domaines-section').style.display = 'none';
        document.getElementById('sidebar-offres-section').style.display = '';
        renderSidebarOffres();
    }
}

function filterTable() {
    let rows = document.querySelectorAll('#candidatures-tbody tr');
    let found = false;
    rows.forEach(row => {
        let type = row.getAttribute('data-type');
        let post = row.getAttribute('data-post');
        let domaine = row.getAttribute('data-domaine');
        let offre = row.getAttribute('data-offre');

        let show = true;

        // Filter by type
        if (selectedType && type !== selectedType) show = false;

        // Filter by post (Tous les postes: show only if post != 'Aucun poste')
        if (show && selectedPost) {
            if (selectedPost === 'all') {
                if (post === 'Aucun poste') show = false;
            } else if (selectedPost === 'Aucun poste') {
                if (post !== 'Aucun poste') show = false;
            } else {
                if (post !== selectedPost) show = false;
            }
        }

        // Filter by domaine (only for "Aucun poste")
        if (show && selectedPost === 'Aucun poste' && selectedDomaine && domaine !== selectedDomaine) show = false;

        // Filter by offre (when clicking an offer in sidebar)
        if (show && selectedOffre && offre !== selectedOffre) show = false;

        row.style.display = show ? '' : 'none';
        if (show) found = true;
    });
    document.getElementById('no-candidature').style.display = found ? 'none' : '';
}

document.addEventListener('DOMContentLoaded', function() {
    updateSidebar();
    filterTable();

    // Emploi/Stage filter
    document.querySelectorAll('.filter-type').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-type').forEach(b => b.classList.remove('active-type'));
            this.classList.add('active-type');
            selectedType = this.getAttribute('data-type');
            selectedPost = 'all';
            selectedDomaine = '';
            selectedOffre = '';
            document.querySelectorAll('.filter-post').forEach(b => b.classList.remove('active-type'));
            document.getElementById('btn-tous-postes').classList.add('active-type');
            updateSidebar();
            filterTable();
        });
    });

    // Post filter (Tous les postes / Aucun poste)
    document.querySelectorAll('.filter-post').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-post').forEach(b => b.classList.remove('active-type'));
            this.classList.add('active-type');
            selectedPost = this.getAttribute('data-post');
            selectedDomaine = '';
            selectedOffre = '';
            updateSidebar();
            filterTable();
        });
    });

    // Delegate sidebar clicks (since we re-render them)
    document.querySelector('.col-md-3').addEventListener('click', function(e) {
        if (e.target.classList.contains('filter-domaine')) {
            document.querySelectorAll('.filter-domaine').forEach(b => b.classList.remove('active'));
            e.target.classList.add('active');
            selectedDomaine = e.target.getAttribute('data-domaine');
            filterTable();
        }
        if (e.target.classList.contains('filter-offre')) {
            document.querySelectorAll('.filter-offre').forEach(b => b.classList.remove('active'));
            e.target.classList.add('active');
            selectedOffre = e.target.getAttribute('data-offre');
            selectedPost = selectedOffre ? selectedOffre : 'all';
            document.querySelectorAll('.filter-post').forEach(b => b.classList.remove('active-type'));
            if (!selectedOffre) {
                document.getElementById('btn-tous-postes').classList.add('active-type');
            }
            updateSidebar();
            filterTable();
        }
    });

    // Select all
    document.addEventListener('change', function(e) {
        if (e.target && e.target.id === 'select-all') {
            document.querySelectorAll('.select-candidature').forEach(cb => cb.checked = e.target.checked);
        }
    });

    // Delete selected (you can keep this as is, or adapt to your backend)
    // ... existing code above ...

// Delete and Export selected
document.addEventListener('click', function(e) {
    if (e.target && e.target.id === 'delete-selected') {
        let ids = Array.from(document.querySelectorAll('.select-candidature:checked')).map(cb => cb.value);
        if(ids.length === 0) return alert('Sélectionnez au moins une candidature.');
        if(!confirm('Voulez-vous vraiment supprimer les candidatures sélectionnées ?')) return;
        fetch('{{ route("admin.spontaneous-applications.delete") }}', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify({ids: ids})
})
        .then(res => res.json())
        .then(data => {
            if(data.success){
                ids.forEach(id => {
                    let row = document.querySelector('tr input.select-candidature[value="'+id+'"]')?.closest('tr');
                    if(row) row.remove();
                });
                filterTable();
            }else{
                alert('Erreur lors de la suppression');
            }
        });
    }
    if (e.target && e.target.id === 'export-selected') {
        let ids = Array.from(document.querySelectorAll('.select-candidature:checked')).map(cb => cb.value);
        if(ids.length === 0) return alert('Sélectionnez au moins une candidature.');
        // Create a form and submit to download Excel
        let form = document.createElement('form');
        form.method = 'POST';
        form.action = '{{ route("admin.spontaneous-applications.export") }}';
        form.style.display = 'none';
        let csrf = document.createElement('input');
        csrf.type = 'hidden';
        csrf.name = '_token';
        csrf.value = '{{ csrf_token() }}';
        form.appendChild(csrf);
        ids.forEach(id => {
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'ids[]';
            input.value = id;
            form.appendChild(input);
        });
        document.body.appendChild(form);
        form.submit();
        setTimeout(() => form.remove(), 1000);
    }
});

// ... existing code below ...
});
</script>
@endpush

@push('styles')
<style>
    .navbar, .navbar.navbar-expand-lg, .navbar.navbar-light, .navbar.navbar-default {
        background: #fff !important;
        border-bottom: 1px solid #e5e5e5;
        z-index: 1040;
    }
    body {
        padding-top: 0 !important;
    }
    .admin-app-margin{
        margin-top: 200px !important;
    }
    .container-fluid.py-4 {
        margin-top: 0 !important;
    }
    .card-header {
        background: #fff !important;
        border-bottom: 1px solid #e5e5e5;
        z-index: 1;
    }
    .border-end {
        background: #fafbfc;
        min-height: 100%;
        padding-bottom: 100px;
    }
    .list-group-item.active,
    .list-group-item.filter-domaine.active,
    .list-group-item.filter-offre.active {
        background: #ff6600;
        color: #fff;
        border-color: #ff6600;
    }
    .list-group-item {
        cursor: pointer;
    }
    .list-group-item:hover {
        background: #f5f5f5;
    }
    .filter-type.active-type, .filter-type.active,
    .filter-post.active-type, .filter-post.active {
        background: #ff6600 !important;
        color: #fff !important;
        border-color: #ff6600 !important;
    }
    .filter-type:not(.active-type), .filter-post:not(.active-type) {
        background: #fff !important;
        color: #ff6600 !important;
        border-color: #ff6600 !important;
    }
    @media (max-width: 991.98px) {
        .border-end {
            border-right: none !important;
            border-bottom: 1px solid #eee;
        }
    }
</style>
@endpush