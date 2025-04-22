@extends('layouts.admin')

@section('title', 'Candidatures Spontanées')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Candidatures Spontanées</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($applications->isEmpty())
        <div class="alert alert-info">Aucune candidature spontanée pour le moment.</div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>CV</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applications as $app)
                    <tr>
                        <td>{{ $app->name }}</td>
                        <td>{{ $app->email }}</td>
                        <td>
                            @if($app->cv)
                                <a href="{{ asset('storage/' . $app->cv) }}" target="_blank">Voir CV</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $app->message }}</td>
                        <td>{{ $app->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection