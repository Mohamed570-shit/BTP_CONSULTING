@extends('layouts.rh')

@section('title', 'Candidatures Spontanées')

@section('content')

{{-- <div class="container-fluid py-5">
    <div class="row">
        <!-- Sidebar: Offres d'emploi -->
        <div class="col-md-3 mb-4">
            <div class="list-group shadow-sm rounded-3">
                <h5 class="mb-4 text-uppercase font-weight-bold text-dark">Offres d'emploi</h5>
                @foreach($offres as $key => $offre)
                    <a href="#offre{{ $key+1 }}" class="list-group-item list-group-item-action{{ $key == 0 ? ' active' : '' }} rounded-3 border-0 mb-2 p-3 bg-light shadow-sm hover:bg-info text-dark hover:text-white transition-all">
                        {{ $offre->titre }}
                    </a>
                @endforeach
            </div>

            <div class="mt-4">
                <a href="{{ route('admin.candidatures.export') }}" class="btn btn-success w-100 rounded-3 py-2 shadow-sm hover:bg-green-600">
                    📥 Exporter Excel
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <h2 class="mb-4 text-primary font-weight-bold">Candidatures Spontanées</h2>

            @foreach($offres as $key => $offre)
                <div id="offre{{ $key+1 }}" class="mb-5 shadow-sm p-4 rounded-3 bg-white">
                    <h4 class="mb-4 text-muted font-weight-bold">{{ $offre->titre }}</h4>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle table-bordered">
                            <thead class="bg-dark text-white rounded-top">
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>CV</th>
                                    <th>Lettre Motivation</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $filtered = $candidatures->where('post', $offre->titre);
                                @endphp

                                @forelse($filtered as $candidature)
                                    <tr class="hover:bg-light transition-all">
                                        <td>{{ $candidature->nom }}</td>
                                        <td>{{ $candidature->email }}</td>
                                        <td>
                                            @if($candidature->cv)
                                                <a href="{{ route('admin.cv.download', ['filename' => basename($candidature->cv)]) }}" target="_blank" class="btn btn-sm btn-outline-info rounded-3 shadow-sm">
                                                    Voir CV
                                                </a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($candidature->lettre_motivation, 50) }}</td>
                                        <td>{{ $candidature->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.candidatures.destroy', $candidature->id) }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger rounded-3 shadow-sm">
                                                    🗑 Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Aucune candidature pour cette offre.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection --}}

    <div class="container-fluid py-5">
        <div class="row">
            <!-- Sidebar: Offres d'emploi -->
            <div class="col-md-3 mb-4">
                <div class="list-group shadow-sm rounded-3">
                    <h5 class="mb-4 text-uppercase font-weight-bold text-dark">Offres d'emploi</h5>
                    @foreach ($offres as $key => $offre)
                        <a href="#offre{{ $key + 1 }}"
                            class="list-group-item list-group-item-action{{ $key == 0 ? ' active' : '' }} rounded-3 border-0 mb-2 p-3 bg-light shadow-sm hover:bg-info text-dark hover:text-white transition-all">
                            {{ $offre->titre }}
                        </a>
                    @endforeach
                </div>

                <div class="mt-4">
                    <a href="{{ route('admin.candidatures.export') }}"
                        class="btn btn-success w-100 rounded-3 py-2 shadow-sm hover:bg-green-600">
                        📥 Exporter Excel
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <h2 class="mb-4 text-primary font-weight-bold">Candidatures Spontanées</h2>

                @foreach ($offres as $key => $offre)
                    <div id="offre{{ $key + 1 }}" class="mb-5 shadow-sm p-4 rounded-3 bg-white">
                        <h4 class="mb-4 text-muted font-weight-bold">{{ $offre->titre }}</h4>

                        <div class="table-responsive">
                            <table class="table table-hover align-middle table-bordered">
                                <thead class="bg-dark text-white rounded-top">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>CV</th>
                                        <th>Lettre Motivation</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $filtered = $candidatures->where('post', $offre->titre);
                                    @endphp

                                    @forelse($filtered as $candidature)
                                        <tr class="hover:bg-light transition-all">
                                            <td>{{ $candidature->nom }}</td>
                                            <td>{{ $candidature->email }}</td>
                                            <td>
                                                @if ($candidature->cv)
                                                    <a href="{{ route('admin.cv.download', ['filename' => basename($candidature->cv)]) }}"
                                                        target="_blank"
                                                        class="btn btn-sm btn-outline-info rounded-3 shadow-sm">
                                                        Voir CV
                                                    </a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ Str::limit($candidature->lettre_motivation, 50) }}</td>
                                            <td>{{ $candidature->created_at->format('d/m/Y H:i') }}</td>
                                            <td>
                                                <form method="POST"
                                                    action="{{ route('admin.candidatures.destroy', $candidature->id) }}"
                                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-sm btn-outline-danger rounded-3 shadow-sm">
                                                        🗑️ Supprimer
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted">Aucune candidature pour cette
                                                offre.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

