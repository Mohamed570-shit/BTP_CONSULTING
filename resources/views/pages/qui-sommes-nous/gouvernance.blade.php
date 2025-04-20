@extends('layouts.app')

@section('title', 'Gouvernance')

@section('content')
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Gouvernance</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-orange">Gouvernance</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gouvernance Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-orange">Gouvernance</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-users-cog text-orange me-2"></i> Notre Structure de Gouvernance
                </h1>
                <p class="mb-0">
                    Découvrez la structure de gouvernance de <strong>BTP Consulting</strong>, garantissant une gestion transparente, efficace et alignée sur nos valeurs d’excellence.
                </p>
            </div>

            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="mb-4 text-center">Conseil d’Administration</h2>
                    <p class="text-center mb-5">
                        Le Conseil d’Administration de BTP Consulting est composé de membres expérimentés qui orientent la stratégie de l’entreprise pour assurer son développement durable et sa performance.
                    </p>
                    <div class="governance-members">
                        @php
                            $members = [
                                ['name' => '[Nom du Président]', 'role' => 'Président'],
                                ['name' => '[Nom du Membre]', 'role' => 'Membre'],
                                ['name' => '[Nom du Membre]', 'role' => 'Membre'],
                            ];
                        @endphp
                        <div class="row g-4">
                            @foreach ($members as $member)
                                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.{{ 2 + (2 * $loop->index) }}s">
                                    <div class="member-card text-center p-4 bg-light rounded shadow-sm">
                                        <i class="fas fa-user-tie fa-3x text-orange mb-3"></i>
                                        <h4>{{ $member['name'] }}</h4>
                                        <p class="text-muted">{{ $member['role'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gouvernance End -->

    <!-- Styles CSS Internes -->
    <style>
        /* Background Header */
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/8c/fe/04/8cfe045a3f540a1e34022dae599236fa.jpg');
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

        /* Member Card */
        .member-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .member-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .member-card h4 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
        }

        .member-card p {
            font-size: 1rem;
            margin: 0;
        }

        /* Text Styles */
        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
        }

        p {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.6;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .bg-breadcrumb {
                min-height: 250px;
            }

            h2 {
                font-size: 2rem;
            }

            .member-card h4 {
                font-size: 1.2rem;
            }

            .member-card p {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .bg-breadcrumb {
                min-height: 200px;
            }

            h2 {
                font-size: 1.8rem;
            }

            .member-card h4 {
                font-size: 1.1rem;
            }

            .member-card p {
                font-size: 0.9rem;
            }
        }
    </style>
@endsection
