@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4">
    <h2 class="fw-bold mb-3" style="color:#0d6efd;">Carte des Projets</h2>
    <div id="map"></div>
</div>
@endsection

@push('styles')
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
<style>
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
</style>
@endpush

@push('scripts')
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<!-- Leaflet MarkerCluster -->
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var projects = @json($projects);

        // Initialize map
        var map = L.map('map').setView([32.5, -6.5], 6);

        // Add OpenStreetMap tiles (free)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Create marker cluster group
        var markers = L.markerClusterGroup();

        // ... existing code ...
        projects.forEach(function(proj) {
            if (proj.x && proj.y) {
                var imgUrl = proj.image 
                    ? '/secure-image/' + proj.id 
                    : 'https://via.placeholder.com/120x80?text=Projet';

                // Popup content with a button
                var popupContent = `
                    <div style="text-align:center;min-width:140px;">
                        <img src="${imgUrl}" alt="${proj.titre}" style="width:120px;height:80px;object-fit:cover;border-radius:6px;margin-bottom:6px;">
                        <div><strong>${proj.titre}</strong></div>
                        <div style="font-size:0.95em;color:#555;">${proj.domaine}</div>
                        <button class="btn btn-primary btn-sm mt-2" style="margin-top:8px;" onclick="voirDetailsProjet(${proj.id})">Voir détails</button>
                    </div>
                `;

                var marker = L.marker([parseFloat(proj.x), parseFloat(proj.y)])
                    .bindPopup(popupContent);
                markers.addLayer(marker);
            }
        });
// ... existing code ...

// Function to handle "Voir détails" button
window.voirDetailsProjet = function(id) {
    window.location.href = '/projets-recents#projet-' + id;
};
// ... existing code ...
// Add this script after your map code (inside the same <script> tag or in a new one)
window.voirDetailsProjet = function(id) {
    // Example: redirect to projets-recents and scroll to the project
    window.location.href = '/projets-recents#projet-' + id;
    // Or: open a modal, or make an AJAX call, etc.
};

        // Add markers to map
        map.addLayer(markers);
    });
</script>
@endpush