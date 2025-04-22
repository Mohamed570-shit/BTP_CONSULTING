@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4">
    <h2 class="fw-bold mb-3" style="color:#0d6efd;">Carte des Projets</h2>
    <div id="map" style="width:100%;height:600px;border-radius:18px;overflow:hidden;"></div>
</div>
@endsection

@push('scripts')
<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt-kW9QxF3KwNxsh8nuq1MO4230nvnuyk"></script>
<!-- MarkerClusterer -->
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var projects = @json($projects);

        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 32.5, lng: -6.5}, // Maroc center
            zoom: 6
        });

        var markers = projects.map(function(proj) {
            var marker = new google.maps.Marker({
                position: {lat: parseFloat(proj.x), lng: parseFloat(proj.y)},
                title: proj.titre
            });

            var infowindow = new google.maps.InfoWindow({
                content: `<strong>${proj.titre}</strong><br>${proj.domaine}`
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });

            return marker;
        });

        // Cluster markers
        new markerClusterer.MarkerClusterer({ map, markers });
    });
</script>
@endpush

@push('styles')
<style>
    #map { box-shadow: 0 2px 12px #0002; }
</style>
@endpush