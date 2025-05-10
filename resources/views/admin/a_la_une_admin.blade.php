@extends('layouts.admin')

@section('title', 'Gestion A la une')

@section('content')
<div class="row">
    <div class="col-md-3">
        <button class="btn btn-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#addALaUneModal">
            Ajouter carte
        </button>
        <ul class="list-group" id="a-la-une-sidebar">
            @foreach($aLaUnes as $item)
                <li class="list-group-item a-la-une-item {{ $loop->first ? 'active' : '' }}"
                    data-id="{{ $item->id }}">
                    {{ $item->title }}
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-9">
        <div id="a-la-une-details">
            <!-- Details and edit form will be loaded here via AJAX -->
        </div>
    </div>
</div>

<!-- Modal: Add A la une -->
<div class="modal fade" id="addALaUneModal" tabindex="-1" aria-labelledby="addALaUneModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" id="addALaUneForm" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="addALaUneModalLabel">Ajouter à la une</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        <div class="mb-2">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-2">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-2">
            <label class="form-label">Présentation</label>
            <input type="text" name="presentation" class="form-control">
        </div>
        <div class="mb-2">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="mb-2">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-2">
            <label class="form-label">Active</label>
            <select name="active" class="form-control">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
</div>

@push('scripts')
<script>
function loadALaUneDetails(id) {
    $.get("{{ url('admin/a_la_une_admin') }}/" + id, function(data) {
        $('#a-la-une-details').html(data);
    });
}

$(document).ready(function() {
    // Load first item details by default
    let firstId = $('.a-la-une-item.active').data('id');
    if (firstId) loadALaUneDetails(firstId);

    // Sidebar click
    $('#a-la-une-sidebar').on('click', '.a-la-une-item', function() {
        $('.a-la-une-item').removeClass('active');
        $(this).addClass('active');
        loadALaUneDetails($(this).data('id'));
    });

    // Add A la une
    $('#addALaUneForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
            url: "{{ route('admin.a_la_une_admin.store') }}",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function() { location.reload(); },
            error: function(xhr) { alert('Erreur: ' + xhr.responseText); }
        });
    });

    // Delegate events for dynamic content (edit, delete, add image, etc.)
    $('#a-la-une-details')
        // Edit A la une
        .on('submit', '#editALaUneForm', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let formData = new FormData(this);
            $.ajax({
                url: "{{ url('admin/a_la_une_admin') }}/" + id,
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {'X-HTTP-Method-Override': 'PUT'},
                success: function() { location.reload(); },
                error: function(xhr) { alert('Erreur: ' + xhr.responseText); }
            });
        })
        // Delete A la une
        .on('click', '#deleteALaUneBtn', function() {
            if (!confirm('Voulez-vous supprimer cette carte et toutes ses images ?')) return;
            let id = $(this).data('id');
            $.ajax({
                url: "{{ url('admin/a_la_une_admin') }}/" + id,
                method: "POST",
                data: {_token: "{{ csrf_token() }}", _method: "DELETE"},
                success: function() { location.reload(); },
                error: function(xhr) { alert('Erreur: ' + xhr.responseText); }
            });
        })
        // Add image
        .on('submit', '#addImageForm', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let formData = new FormData(this);
            $.ajax({
                url: "{{ url('admin/a_la_une_admin') }}/" + id + "/images",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function() { loadALaUneDetails(id); },
                error: function(xhr) { alert('Erreur: ' + xhr.responseText); }
            });
        })
        // Delete image
        .on('click', '.delete-image-btn', function() {
            if (!confirm('Supprimer cette image ?')) return;
            let imageId = $(this).data('id');
            let aLaUneId = $(this).data('alaune');
            $.ajax({
                url: "{{ url('admin/a_la_une_admin/images') }}/" + imageId,
                method: "POST",
                data: {_token: "{{ csrf_token() }}", _method: "DELETE"},
                success: function() { loadALaUneDetails(aLaUneId); },
                error: function(xhr) { alert('Erreur: ' + xhr.responseText); }
            });
        });
});
</script>
@endpush
@endsection