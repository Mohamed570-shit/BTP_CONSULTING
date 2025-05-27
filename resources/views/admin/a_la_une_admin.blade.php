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
                <a href="{{ route('admin.a_la_une_admin', ['id' => $item->id]) }}" style="text-decoration:none;">
                    <li class="list-group-item a-la-une-item {{ $selectedALaUne && $selectedALaUne->id == $item->id ? 'active' : '' }}"
                        data-id="{{ $item->id }}">
                        {{ $item->title }}
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
    <div class="col-md-9">
        @if($selectedALaUne)
            <div class="card mb-3">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.a_la_une_admin.update', $selectedALaUne->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label class="form-label">Titre</label>
                            <input type="text" name="title" class="form-control" value="{{ $selectedALaUne->title }}" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" required>{{ $selectedALaUne->description }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Présentation</label>
                            <input type="text" name="presentation" class="form-control" value="{{ $selectedALaUne->presentation }}">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" value="{{ $selectedALaUne->date ? \Illuminate\Support\Str::substr($selectedALaUne->date,0,10) : '' }}">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Image</label>
                            @if($selectedALaUne->image)
                                <img src="{{ asset('storage/'.$selectedALaUne->image) }}" alt="Image" style="max-width:200px;display:block;margin-bottom:10px;">
                            @endif
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('admin.a_la_une_admin.delete', $selectedALaUne->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Voulez-vous supprimer cette carte ?')">Supprimer</button>
                    </form>
                </div>
            </div>

            <!-- Button: Ajouter une image (below form, left aligned) -->
            <div class="d-flex justify-content-start mb-3">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#addImageModal">
                    <i class="bi bi-plus"></i> Ajouter une image
                </button>
            </div>

            <!-- Images Section: below the button -->
            <div>
                <div class="row">
                    @foreach($selectedALaUne->images as $img)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <!-- When displaying images -->
<img src="{{ route('a_la_une.image', $img->image_path) }}" alt="photo">
                                <div class="card-body p-2">
                                    <form method="POST" action="{{ route('admin.a_la_une_admin.images.delete', $img->id) }}" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mb-2" onclick="return confirm('Supprimer cette image ?')">
                                            <i class="bi bi-trash"></i> Supprimer
                                        </button>
                                    </form>
                                    <button class="btn btn-secondary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#editImageModal{{ $img->id }}">
                                        <i class="bi bi-pencil-square"></i> Modifier
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal: Edit Image -->
                        <div class="modal fade" id="editImageModal{{ $img->id }}" tabindex="-1" aria-labelledby="editImageModalLabel{{ $img->id }}" aria-hidden="true">
                          <div class="modal-dialog">
                            <form class="modal-content" method="POST" action="{{ route('admin.a_la_une_admin.images.update', $img->id) }}" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <div class="modal-header">
                                <h5 class="modal-title" id="editImageModalLabel{{ $img->id }}">Modifier l'image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-2">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image_path" class="form-control">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                              </div>
                            </form>
                          </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="alert alert-info">Aucune carte à la une sélectionnée.</div>
        @endif
    </div>
</div>

<!-- Modal: Add A la une -->
<div class="modal fade" id="addALaUneModal" tabindex="-1" aria-labelledby="addALaUneModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="{{ route('admin.a_la_une_admin.store') }}" enctype="multipart/form-data">
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
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal: Add Image -->
<div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="{{ route('admin.a_la_une_admin.images.add', $selectedALaUne->id ?? 0) }}" enctype="multipart/form-data">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="addImageModalLabel">Ajouter une image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
      </div>
      <div class="modal-body">
        <div class="mb-2">
            <label class="form-label">Image</label>
            <input type="file" name="image_path" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
</div>
@endsection