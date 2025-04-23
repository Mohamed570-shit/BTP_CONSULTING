@extends('layouts.app')

{{-- ======== SECTION: CONTENT ======== --}}
@section('content')
    <div class="container-fluid pt-3 mt-3">
        <div id="map"></div>
    </div>
@endsection

{{-- ======== SECTION: STYLES ======== --}}
@push('styles')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />

    <style>
        /* ======== MAP AND HEADER STYLING ======== */
        .bgtop-btp {
            background: linear-gradient(to right, rgb(19, 7, 244), #6366f1);
            height: 140px;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
            box-shadow: var(--shadow-lg);
        }

        #map {
            width: 100%;
            height: 600px;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 2px 12px #0002;
            min-width: 300px;
            min-height: 400px;
            margin-bottom: 30px;
            display: block;
        }

        /* ======== NAVBAR STYLING ======== */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1030;
            background-color: #fff;
            padding: 0.25rem 1rem;
            min-height: 48px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.1rem;
            padding: 0.5rem;
        }

        .navbar-nav .nav-link {
            font-size: 0.9rem;
            padding: 0.5rem 0.75rem;
        }

        /* ======== TOP BAR STYLING ======== */
        .top-bar {
            background-color: #f8f9fa;
            padding: 0.2rem 1rem;
            font-size: 0.85rem;
            min-height: 30px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            z-index: 1031;
        }

        .top-bar a {
            color: #333;
            margin-left: 1rem;
            text-decoration: none;
        }

        .top-bar a:hover {
            color: #007bff;
        }

        .container-fluid {
            padding-top: 8px;
        }

        /* ======== RESPONSIVE STYLING ======== */
        @media (max-width: 768px) {
            #map {
                height: 400px;
            }

            .container-fluid {
                padding-top: 70px;
            }

            .navbar {
                padding: 0.2rem 0.75rem;
            }

            .navbar-brand {
                font-size: 1rem;
            }

            .navbar-nav .nav-link {
                font-size: 0.85rem;
            }

            .top-bar {
                padding: 0.15rem 0.75rem;
                font-size: 0.8rem;
                min-height: 28px;
            }
        }
    </style>
@endpush

{{-- ======== SECTION: SCRIPTS ======== --}}
@push('scripts')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var projects = @json($projects);

            var map = L.map('map').setView([32.5, -6.5], 6);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var markers = L.markerClusterGroup();

            projects.forEach(function (proj) {
                if (proj.x && proj.y) {
                    var imgUrl = proj.image
                        ? '/secure-image/' + proj.id
                        : 'https://via.placeholder.com/120x80?text=Projet';

                    var popupContent = `
                        <div style="text-align:center;min-width:140px;">
                            <img src="${imgUrl}" alt="${proj.titre}" style="width:120px;height:80px;object-fit:cover;border-radius:6px;margin-bottom:6px;">
                            <div><strong>${proj.titre}</strong></div>
                            <div style="font-size:0.95em;color:#555;">${proj.domaine}</div>
                            <button class="btn btn-primary btn-sm mt-2" onclick="voirDetailsProjet(${proj.id})">Voir détails</button>
                        </div>
                    `;

                    var marker = L.marker([parseFloat(proj.x), parseFloat(proj.y)])
                        .bindPopup(popupContent);

                    markers.addLayer(marker);
                }
            });

            window.voirDetailsProjet = function (id) {
                window.location.href = '/projets-recents#projet-' + id;
            };

            map.addLayer(markers);
        });
    </script>
@endpush
