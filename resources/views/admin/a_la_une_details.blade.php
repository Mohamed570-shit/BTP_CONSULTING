@if($aLaUne)
    <form id="editALaUneForm" data-id="{{ $aLaUne->id }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" value="{{ $aLaUne->title }}" required>
        </div>
        <div class="mb-2">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required>{{ $aLaUne->description }}</textarea>
        </div>
        <div class="mb-2">
            <label class="form-label">Présentation</label>
            <input type="text" name="presentation" class="form-control" value="{{ $aLaUne->presentation }}">
        </div>
        <div class="mb-2">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" value="{{ $aLaUne->date }}">
        </div>
        <div class="mb-2">
            <label class="form-label">Image</label>
            @if($aLaUne->image)
                <img src="{{ asset('storage/'.$aLaUne->image) }}" alt="image" width="80"><br>
            @endif
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-2">
            <label class="form-label">Active</label>
            <select name="active" class="form-control">
                <option value="1" {{ $aLaUne->active ? 'selected' : '' }}>Oui</option>
                <option value="0" {{ !$aLaUne->active ? 'selected' : '' }}>Non</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <button type="button" class="btn btn-danger" id="deleteALaUneBtn" data-id="{{ $aLaUne->id }}">Supprimer</button>
    </form>

    <hr>
    <h5>Photos</h5>
    <form id="addImageForm" data-id="{{ $aLaUne->id }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-2 d-flex">
            <input type="file" name="image_path" class="form-control me-2" required>
            <input type="text" name="title" class="form-control me-2" placeholder="Titre">
            <input type="text" name="description" class="form-control me-2" placeholder="Description">
            <button type="submit" class="btn btn-primary">Ajouter photo</button>
        </div>
    </form>
    <div class="row">
        @foreach($aLaUne->images as $img)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/'.$img->image_path) }}" class="card-img-top" alt="photo">
                    <div class="card-body p-2">
                        <div>{{ $img->title }}</div>
                        <div>{{ $img->description }}</div>
                        <button class="btn btn-danger btn-sm mt-2 delete-image-btn" data-id="{{ $img->id }}" data-alaune="{{ $aLaUne->id }}">Supprimer</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif