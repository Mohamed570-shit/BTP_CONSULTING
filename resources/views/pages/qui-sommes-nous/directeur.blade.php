@extends('layouts.app')

@section('title', 'Mot du Directeur Général')

@section('content')
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Mot du Directeur Général</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Mot du Directeur Général</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Mot du Directeur Général Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- En-tête -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Mot du Directeur Général</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-user-tie text-primary me-2"></i> Vision et Engagement
                </h1>
                <p class="mb-0">
                    Découvrez la vision et les valeurs portées par le Directeur Général de <strong>BTP Consulting</strong>, au service de l’excellence et de l’innovation en ingénierie.
                </p>
            </div>

            <!-- Contenu principal -->
            <div class="row g-5 align-items-center">
                <!-- Section texte -->
                <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="director-section">
                        <!-- Citation -->
                        <i class="fas fa-quote-left quote-icon left"></i>
                        <i class="fas fa-quote-right quote-icon right"></i>

                        @php
                            $sections = [
                                [
                                    'icon' => 'handshake',
                                    'title' => 'Bienvenue à Tous',
                                    'text' => '<strong>Chers partenaires, clients et amis,</strong><br>
                                        Au nom de <strong>BTP Consulting</strong>, j’ai l’honneur de vous accueillir avec une profonde gratitude. Depuis nos débuts, nous nous engageons à faire de l’excellence, de l’innovation et de la durabilité les fondements de notre réussite.',
                                ],
                                [
                                    'icon' => 'bullseye',
                                    'title' => 'Notre Mission',
                                    'text' => 'Chez BTP Consulting, nous croyons que chaque projet est une opportunité pour construire un avenir meilleur. Grâce à notre expertise en études techniques, diagnostics structurels et réhabilitation, nous offrons des solutions d’ingénierie fiables et durables qui répondent aux besoins de nos clients.',
                                ],
                                [
                                    'icon' => 'shield-alt',
                                    'title' => 'Notre Engagement',
                                    'text' => 'Nous nous engageons à garantir la sécurité, la qualité et le respect des normes environnementales dans tous nos projets. Je tiens à remercier nos clients et partenaires pour leur confiance, ainsi que notre équipe pour son engagement et son professionnalisme.',
                                ],
                                [
                                    'icon' => 'hands-helping',
                                    'title' => 'Ensemble pour l’Avenir',
                                    'text' => 'Ensemble, continuons à bâtir des projets qui marquent l’avenir. N’hésitez pas à nous contacter pour toute collaboration ou demande d’information.',
                                ],
                            ];
                        @endphp

                        @foreach ($sections as $section)
                            <h3 class="mb-3">
                                <i class="fas fa-{{ $section['icon'] }} text-primary me-2"></i> {{ $section['title'] }}
                            </h3>
                            <p class="mb-4">{!! $section['text'] !!}</p>
                        @endforeach

                        <!-- Signature -->
                        <p class="director-signature mt-4">
                            <strong>M.Mourad LJAZOULI</strong><br>
                            Directeur Général de BTP Consulting
                        </p>

                        <!-- Bouton d'action -->
                        <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-2 px-4 mt-3">
                            <i class="fas fa-envelope me-2"></i> Contactez-nous
                        </a>
                    </div>
                </div>

                <!-- Section image -->
                <div class="col-lg-4 wow fadeInRight text-center" data-wow-delay="0.4s">
                    <div class="director-image">
                        <img src="{{ asset('asset/img/morad.png') }}" class="img-fluid rounded-circle shadow-lg" alt="Directeur Général de BTP Consulting">
                    </div>
                </div>
            </div>
        </div>
    </div>.
    <!-- Mot du Directeur Général End -->

    <!-- Styles CSS Internes -->
    <style>
        /* Background Header */
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/bc/42/02/bc4202c98f7746775b82818f893120f1.jpg');
            background-size: cover;
            background-position: center;
            min-height: 300px;
            display: flex;
            align-items: center;
        }

        /* Director Section */
        .director-section {
            position: relative;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        /* Quote Icons */
        .quote-icon {
            font-size: 2rem;
            color: #ff6200;
            opacity: 0.2;
            position: absolute;
        }

        .quote-icon.left {
            top: 20px;
            left: 20px;
        }

        .quote-icon.right {
            bottom: 20px;
            right: 20px;
        }

        /* Text Styles */
        h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
        }

        p {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.6;
        }

        .director-signature {
            font-size: 1.2rem;
            font-weight: 500;
            color: #333;
            font-style: italic;
        }

        /* Image Styles */
        .director-image img {
            max-width: 250px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .director-image img:hover {
            transform: scale(1.05);
        }

        /* Button Styles */
        .btn-primary {
            background-color: #ff6200;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .bg-breadcrumb {
                min-height: 250px;
            }

            .director-section {
                padding: 15px;
            }

            .director-image img {
                max-width: 200px;
            }

            h3 {
                font-size: 1.3rem;
            }

            p {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .bg-breadcrumb {
                min-height: 200px;
            }

            .director-section {
                padding: 10px;
            }

            .director-image img {
                max-width: 150px;
            }

            h3 {
                font-size: 1.2rem;
            }

            p {
                font-size: 0.9rem;
            }

            .quote-icon {
                font-size: 1.5rem;
            }
        }
    </style>
@endsection
