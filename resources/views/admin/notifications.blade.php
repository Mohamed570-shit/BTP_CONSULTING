@extends('layouts.admin')

@section('title', 'Notifications')

@section('content')
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0"><i class="fas fa-bell me-2"></i> Notifications</h5>
        </div>
        <div class="card-body">
            @if ($notifications->isEmpty())
                <p class="text-muted">Aucune notification pour le moment.</p>
            @else
                <ul class="list-group">
                    @foreach ($notifications as $notification)
                        <li class="list-group-item {{ $notification->unread() ? 'bg-light' : '' }}">
                            {{ $notification->data['message'] }}
                            <small class="text-muted d-block">{{ $notification->created_at->diffForHumans() }}</small>
                            @if ($notification->unread())
                                <form action="{{ route('admin.notifications.read', $notification->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-link text-primary">Marquer comme lue</button>
                                </form>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
