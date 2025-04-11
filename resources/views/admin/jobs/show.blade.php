@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $offre->titre }}</h1>
        <p>{{ $offre->description }}</p>
        <p>Type : {{ $offre->type }}</p>
        <p>Lieu : {{ $offre->location }}</p>
        <p>Expire le : {{ $offre->date_expiration }}</p>
    </div>
@endsection
