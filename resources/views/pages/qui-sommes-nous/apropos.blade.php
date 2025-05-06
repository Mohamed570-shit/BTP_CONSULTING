@extends('layouts.app')

@section('title', 'À Propos de Nous')

@section('content')
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">À Propos de Nous</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-orange">À Propos de Nous</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- Section Texte -->
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-section">
                        <h4 class="text-orange">À Propos de Nous</h4>
                        <h1 class="display-5 mb-4">{{ $apropos->subtitle ?? '' }}</h1>

                        <div class="mb-4">
                            <h3 class="mb-3">
                                <i class="fas fa-building text-orange me-2"></i> Qui Sommes-Nous ?
                            </h3>
                            <p>{!! $apropos->description ?? '' !!}</p>
                        </div>

                        <div class="mb-4">
                            <h3 class="mb-3">
                                <i class="fas fa-tools text-orange me-2"></i> Nos Domaines d'Expertise
                            </h3>
                            <ul class="list-unstyled">
                                @foreach(explode("\n", $apropos->domaines ?? '') as $item)
                                    @if(trim($item) !== '')
                                        <li>
                                            <i class="fas fa-check-circle text-orange me-2"></i> {{ $item }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class="mb-4">
                            <h3 class="mb-3">
                                <i class="fas fa-lightbulb text-orange me-2"></i> Notre Approche
                            </h3>
                            <p>{!! $apropos->approche ?? '' !!}</p>
                        </div>
                    </div>
                </div>
                <!-- Section Image -->
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-light rounded position-relative overflow-hidden shadow-sm">
                        @if(isset($apropos) && $apropos && isset($apropos->image))
                            <img src="{{ route('apropos.image', basename($apropos->image)) }}" class="img-fluid rounded w-100" alt="À propos de BTP Consulting">
                        @else
                            <img src="{{ asset('images/default-about.jpg') }}" class="img-fluid rounded w-100" alt="À propos de BTP Consulting">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Styles CSS Internes -->
    <style>
        /* Background Header */
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('asset/img/img4.jpg')}}');
            background-size: cover;
            background-position: center;
            min-height: 300px;
            display: flex;
            align-items: center;
        }

        /* Orange Color */
        .text-orange {
            color: #ff6200 !important;
        }

        .btn-orange {
            background-color: #ff6200;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-orange:hover {
            background-color: #e95b00;
        }

        /* About Section */
        .about-section {
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .about-section h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
        }

        .about-section p, .about-section li {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.6;
        }

        .about-section li {
            margin-bottom: 10px;
        }

        /* Image Section */
        .bg-light img {
            transition: transform 0.3s ease;
        }

        .bg-light img:hover {
            transform: scale(1.05);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .bg-breadcrumb {
                min-height: 250px;
            }

            .about-section h3 {
                font-size: 1.3rem;
            }

            .about-section p, .about-section li {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .bg-breadcrumb {
                min-height: 200px;
            }

            .about-section h3 {
                font-size: 1.2rem;
            }

            .about-section p, .about-section li {
                font-size: 0.9rem;
            }
        }
    </style>
@endsection
