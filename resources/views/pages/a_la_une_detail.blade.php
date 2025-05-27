@extends('layouts.app')

@section('title', $aLaUne->title)

@section('content')
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="mb-4">{{ $aLaUne->title }}</h1>
                
                <div class="d-flex mb-4">
                    <small class="me-3"><i class="far fa-calendar-alt text-primary me-2"></i>{{ $aLaUne->date ? date('d M, Y', strtotime($aLaUne->date)) : 'Date non spécifiée' }}</small>
                    <small><i class="far fa-user text-primary me-2"></i>Admin</small>
                </div>
                
                @if($aLaUne->images->count() > 0)
                <div class="mb-4">
                    <img src="{{ route('a_la_une.front.image', $aLaUne->images->first()->image_path) }}" class="img-fluid rounded" alt="{{ $aLaUne->title }}">
                </div>
                @endif
                
                <div class="mb-5">
                    <p>{{ $aLaUne->description }}</p>
                    
                    @if($aLaUne->presentation)
                    <div class="mt-4">
                        <h4>Présentation</h4>
                        <p>{{ $aLaUne->presentation }}</p>
                    </div>
                    @endif
                </div>
                
                @if($aLaUne->images->count() > 1)
                <div class="mt-5">
                    <h4 class="mb-3">Galerie d'images</h4>
                    <div class="row g-3">
                        @foreach($aLaUne->images as $image)
                        <div class="col-md-4">
                            <img src="{{ route('a_la_une.front.image', $image->image_path) }}" class="img-fluid rounded" alt="Image">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <div class="mt-5">
                    <a href="{{ route('a_la_une') }}" class="btn btn-primary rounded-pill py-2 px-4">Retour aux actualités</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection