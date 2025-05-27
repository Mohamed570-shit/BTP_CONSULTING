@extends('layouts.app')

@section('title', 'À la une')

@section('content')
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 text-uppercase mb-4">À LA UNE</h1>
            <h5 class="text-primary">Découvrez nos actualités et événements importants</h5>
        </div>
        
        <div class="row g-5">
            @forelse($aLaUnes as $aLaUne)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow-sm h-100">
                    @if($aLaUne->images->count() > 0)
                        <img src="{{ route('a_la_une.front.image', $aLaUne->images->first()->image_path) }}" class="card-img-top" alt="{{ $aLaUne->title }}">
                    @else
                        <img src="{{ asset('asset/img/news1.jpg') }}" class="card-img-top" alt="Image par défaut">
                    @endif
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>{{ $aLaUne->date ? date('d M, Y', strtotime($aLaUne->date)) : 'Date non spécifiée' }}</small>
                            
                        </div>
                        <h5 class="card-title mb-3">{{ $aLaUne->title }}</h5>
                        <p class="card-text">{{ Str::limit($aLaUne->description, 150) }}</p>
                        <a href="{{ route('a_la_une.detail', $aLaUne->id) }}" class="btn btn-primary rounded-pill py-2 px-4 mt-2">Lire plus</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>Aucune actualité disponible pour le moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection