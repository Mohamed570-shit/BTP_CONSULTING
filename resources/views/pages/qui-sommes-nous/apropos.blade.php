@extends('layouts.app')

@section('title', 'À Propos de Nous')

@section('content')
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                        <h1 class="display-5 mb-4">Découvrez BTP Consulting, votre partenaire en ingénierie</h1>

                        @php
                            $sections = [
                                [
                                    'icon' => 'building',
                                    'title' => 'Qui Sommes-Nous ?',
                                    'text' => '<strong>BTP Consulting</strong> est un bureau d’ingénierie spécialisé dans l’étude technique, le diagnostic structurel et l’expertise des ouvrages. Notre mission est d’accompagner nos clients tout au long du cycle de vie de leurs projets, en assurant des solutions optimisées et adaptées aux normes et aux exigences spécifiques de chaque secteur.<br><br>Nous intervenons à différentes étapes, allant de l’analyse des structures existantes jusqu’à la supervision des travaux, garantissant ainsi une expertise complète et approfondie.',
                                ],
                                [
                                    'icon' => 'tools',
                                    'title' => 'Nos Domaines d\'Expertise',
                                    'list' => [
                                        'Études techniques et ingénierie des structures',
                                        'Diagnostics structurels approfondis',
                                        'Réhabilitation et optimisation des infrastructures',
                                        'Assistance et expertise technique',
                                        'Contrôle et supervision des travaux',
                                    ],
                                ],
                                [
                                    'icon' => 'lightbulb',
                                    'title' => 'Notre Approche',
                                    'text' => 'Chez <strong>BTP Consulting</strong>, nous adoptons une approche centrée sur la précision et la qualité. Nous combinons l’expertise technique avec les dernières technologies en ingénierie pour proposer des analyses rigoureuses et des recommandations adaptées aux besoins spécifiques de chaque projet.<br><br>Nos experts assurent un suivi continu des évolutions réglementaires et technologiques afin d’offrir des solutions toujours plus performantes et innovantes.',
                                ],
                            ];
                        @endphp

                        @foreach ($sections as $section)
                            <div class="mb-4">
                                <h3 class="mb-3">
                                    <i class="fas fa-{{ $section['icon'] }} text-orange me-2"></i> {{ $section['title'] }}
                                </h3>
                                @if (isset($section['text']))
                                    <p>{!! $section['text'] !!}</p>
                                @elseif (isset($section['list']))
                                    <ul class="list-unstyled">
                                        @foreach ($section['list'] as $item)
                                            <li>
                                                <i class="fas fa-check-circle text-orange me-2"></i> {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endforeach

                        <!-- Bouton d'Action -->
                        {{-- <a href="{{ url('/contact') }}" class="btn btn-orange rounded-pill py-2 px-4">
                            <i class="fas fa-info-circle me-2"></i> En savoir plus
                        </a> --}}
                    </div>
                </div>

                <!-- Section Image -->
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-light rounded position-relative overflow-hidden shadow-sm">
                        <img src="{{ asset('asset/img/logo11.jpeg') }}" class="img-fluid rounded w-100" alt="À propos de BTP Consulting">
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop');
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
