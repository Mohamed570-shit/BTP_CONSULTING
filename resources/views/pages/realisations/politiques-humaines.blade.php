@extends('layouts.app')

@section('title', 'Politique Ressources Humaines')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Politique Ressources Humaines</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/qui-sommes-nous') }}">Qui Sommes-Nous</a></li>
                <li class="breadcrumb-item active text-primary">Politique Ressources Humaines</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Politique RH Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            @foreach($politiques as $index => $item)
                <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    @if($index % 2 == 0)
                        <div class="col-lg-6">
                            <h4 class="text-primary mb-3">{{ $item->subtitle }}</h4>
                            <h1 class="display-5 mb-4">{{ $item->title }}</h1>
                            <p class="lead text-muted mb-4">
                                {!! nl2br(e($item->description)) !!}
                            </p>
                            @if($item->points)
                                <ul class="list-unstyled">
                                    @foreach(json_decode($item->points, true) as $point)
                                        <li><i class="fas fa-check-circle text-primary me-2"></i> {{ $point }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            @if($item->image)
                                <img src="{{ url('qui-sommes-nous/politique-image/' . $item->image) }}" class="img-fluid rounded" alt="{{ $item->title }}">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=Image+Non+Disponible" class="img-fluid rounded" alt="Image Non Disponible">
                            @endif
                        </div>
                    @else
                        <div class="col-lg-6 order-lg-2">
                            <h2 class="mb-3">{{ $item->title }}</h2>
                            <p class="text-muted mb-4">
                                {!! nl2br(e($item->description)) !!}
                            </p>
                            @if($item->points)
                                <ul class="list-unstyled">
                                    @foreach(json_decode($item->points, true) as $point)
                                        <li><i class="fas fa-check-circle text-primary me-2"></i> {{ $point }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            @if($item->image)
                                <img src="{{ url('qui-sommes-nous/politique-image/' . $item->image) }}" class="img-fluid rounded" alt="{{ $item->title }}">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=Image+Non+Disponible" class="img-fluid rounded" alt="Image Non Disponible">
                            @endif
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <!-- Politique RH End -->

    <!-- Styles CSS -->
    <style>
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/c3/2d/3e/c32d3e594075dd1a07266a8334a840ad.jpg');
            background-size: cover;
            background-position: center;
        }
        h1.display-5 {
            font-size: 3rem;
            font-weight: 700;
            color: #333;
        }
        h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #333;
        }
        p.lead {
            font-size: 1.25rem;
            line-height: 1.6;
        }
        .btn-primary {
            background-color: #ff6200;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        img.rounded {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        img.rounded:hover {
            transform: scale(1.02);
        }
        .list-unstyled li {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #666;
        }
        .list-unstyled i {
            color: #007bff;
        }
        @media (max-width: 992px) {
            h1.display-5 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            p.lead { font-size: 1.1rem; }
            .row.align-items-center { text-align: center; }
            .row.align-items-center img { margin-top: 20px; }
            .order-lg-1, .order-lg-2 { order: 0; }
        }
        @media (max-width: 576px) {
            h1.display-5 { font-size: 2rem; }
            h2 { font-size: 1.8rem; }
            .btn-primary { font-size: 1rem; padding: 10px 20px; }
        }
    </style>
@endsection