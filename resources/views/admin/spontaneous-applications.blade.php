@extends('layouts.admin')

@section('title', 'Candidatures Spontanées')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Sidebar: Offres d'emploi -->
        <div class="col-md-3">
            <div class="list-group mb-4">
                <h5 class="mb-3">Offres d'emploi</h5>
                @foreach($offres as $key => $offre)
                    <a href="#offre{{ $key+1 }}" class="list-group-item list-group-item-action{{ $key == 0 ? ' active' : '' }}">
                        {{ $offre->titre }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Main Content: Candidatures -->
        <div class="col-md-9">
            <h2 class="mb-4">Candidatures Spontanées</h2>

            @foreach($offres as $key => $offre)
                <div id="offre{{ $key+1 }}" class="mb-5">
                    <h4>{{ $offre->titre }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>CV</th>
                                <th>Lettre Motivation</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $filtered = $candidatures->where('post', $offre->titre);
                            @endphp
                            @forelse($filtered as $candidature)
                                <tr>
                                    <td>{{ $candidature->nom }}</td>
                                    <td>{{ $candidature->email }}</td>
                                   
                                <td>
                                    @if($candidature->cv)
                                        <a href="{{ route('admin.cv.download', ['filename' => basename($candidature->cv)]) }}" target="_blank">Voir CV</a>
                                    @else
                                        -
                                    @endif
                                </td>

                                    <td>{{ $candidature->lettre_motivation }}</td>
                                    <td>{{ $candidature->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Aucune candidature pour cette offre.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection