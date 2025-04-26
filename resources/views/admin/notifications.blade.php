@extends('layouts.admin')

@section('title', 'Notifications')

@section('content')
<div class="card">
    <div class="card-header"><b>Notifications</b></div>
    <div class="card-body">
    
        @forelse($notifications as $notification)
            <div class="alert alert-info mb-2">
                Candidature jdid(a): 
                <b>{{ $notification->data['nom'] ?? '---' }}</b> 
                ({{ $notification->data['email'] ?? '---' }}) 
                tsajlat f {{ $notification->created_at->format('d/m/Y H:i') }}
            </div>
        @empty
            <div class="text-center text-muted">Aucune notification.</div>
        @endforelse

    </div>
</div>
@endsection