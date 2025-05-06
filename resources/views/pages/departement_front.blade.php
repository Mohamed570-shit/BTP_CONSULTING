@extends('layouts.app')

@section('title', $departement->title)

@section('content')
    <style>
        .header-etudes {
            background: linear-gradient(90deg, #3014cb 0%, #225bd7 100%);
            padding: 40px 0 20px 0;
            color: #fff;
            text-align: center;
        }
        .header-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        .breadcrumb-etudes {
            color: #225bd7;
            font-size: 1rem;
            margin-bottom: 0;
        }
        .breadcrumb-etudes a {
            color: #fff;
            text-decoration: underline;
        }
        .section-etudes {
            background: #f5f7fa;
            padding: 40px 0;
        }
        .intro-etudes {
            text-align: center;
            margin-bottom: 40px;
        }
        .intro-etudes h2 {
            color: #3014cb;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .intro-etudes p {
            color: #444;
            font-size: 1.1rem;
            margin-bottom: 0;
        }
        .card-etudes {
            background: #fff;
            border: 2px solid #225bd7;
            border-radius: 12px;
            padding: 25px;
            min-height: 370px;
            box-shadow: 0 4px 16px rgba(44, 62, 80, 0.07);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }
        .card-etudes:hover {
            transform: rotate(2deg);
        }
        .card-img-top {
            width: 100%;
            height: 180px;
            object-fit: cover;
            margin-bottom: 15px;
            border-radius: 10px;
        }
        .card-body {
            text-align: center;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #3014cb;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-title svg, .card-title i {
            margin-right: 10px;
            color: #6597f5;
            width: 24px;
            height: 24px;
        }
        .card-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }
        .cta-etudes {
            text-align: center;
            margin-top: 40px;
        }
        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #3014cb, #225bd7);
            color: #fff;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 30px;
            transition: transform 0.3s ease;
        }
        .cta-button:hover {
            transform: scale(1.1);
        }
        @media (max-width: 992px) {
            .header-title { font-size: 2.2rem; }
            .intro-etudes h2 { font-size: 2rem; }
            .card-etudes { padding: 20px; min-height: 320px; }
            .card-title { font-size: 1.1rem; }
            .card-img-top { height: 160px; }
        }
        @media (max-width: 576px) {
            .header-title { font-size: 1.8rem; }
            .intro-etudes h2 { font-size: 1.6rem; }
            .card-etudes { padding: 15px; min-height: 300px; }
            .card-title { font-size: 1rem; }
            .card-text { font-size: 0.95rem; }
            .card-img-top { height: 140px; }
            .cta-button { font-size: 1rem; padding: 10px 20px; }
        }
    </style>

    <!-- Header Start -->
    <header class="header-etudes ">
        <div class="container">
            <h1 class="header-title">{{ $departement->title }}</h1>
            <nav class="breadcrumb-etudes">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>{{ $departement->title }}</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Études Techniques Start -->
    <section class="section-etudes">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-etudes">
                <h2>{{ $departement->subtitle }}</h2>
                <p>
                    {{ $departement->description }}
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">

                @foreach ($departement->cartDepartements as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-etudes h-100">
                            @if($card->image)
                                <img src="{{ asset('storage/cart_images/'.$card->image) }}" class="card-img-top" alt="{{ $card->title }}">
                            @else
                                <img src="https://via.placeholder.com/600x180?text=Image" class="card-img-top" alt="{{ $card->title }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">
                                    @if($card->icon && str_starts_with($card->icon, '<svg'))
                                        {!! $card->icon !!}
                                    @elseif($card->icon)
                                        <i class="{{ $card->icon }}"></i>
                                    @endif
                                    {{ $card->title }}
                                </h5>
                                <p class="card-text">{{ $card->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Call to Action -->
            <div class="cta-etudes">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Études Techniques End -->
@endsection
