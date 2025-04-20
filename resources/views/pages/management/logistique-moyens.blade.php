@extends('layouts.app')

@section('title', 'Département Logistique & Moyens Généraux')

@section('content')
    <style>
        /* Reset and Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        /* Header Styling */
        .header-logistique {
            background: linear-gradient(45deg, #1e3a8a, #3b82f6);
            min-height: 300px;
            display: flex;
            align-items: center;
            position: relative;
            color: #fff;
            animation: gradientShift 8s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .header-title {
            font-size: 3rem;
            font-weight: 700;
            text-transform: uppercase;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .breadcrumb-logistique {
            font-size: 1.1rem;
            text-align: center;
            margin-top: 10px;
        }

        .breadcrumb-logistique a, .breadcrumb-logistique span {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-logistique a:hover, .breadcrumb-logistique span {
            color: #f97316; /* Orange vif */
        }

        /* Section Styling */
        .section-logistique {
            background: #f0f4f8; /* Gris bleu clair */
            padding: 60px 0;
        }

        /* Introduction */
        .intro-logistique {
            text-align: center;
            margin-bottom: 40px;
        }

        .intro-logistique h2 {
            font-size: 2.5rem;
            color: #1e3a8a; /* Bleu profond */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .intro-logistique p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card-logistique {
            background: rgba(255, 255, 255, 0.9);
            border: 3px solid transparent;
            border-image: linear-gradient(to right, #1e3a8a, #f97316) 1;
            border-radius: 15px;
            padding: 25px;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }

        .card-logistique:hover {
            transform: rotate(2deg); /* Pivotement au survol */
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
            font-size: 1.5rem;
            font-weight: 600;
            color: #1e3a8a;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-title svg {
            margin-right: 10px;
            color: #3b82f6; /* Bleu clair */
            width: 24px;
            height: 24px;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        /* Call to Action */
        .cta-logistique {
            text-align: center;
            margin-top: 40px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #1e3a8a, #f97316);
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

        /* Responsive */
        @media (max-width: 992px) {
            .header-title {
                font-size: 2.2rem;
            }

            .intro-logistique h2 {
                font-size: 2rem;
            }

            .card-logistique {
                padding: 20px;
                min-height: 320px;
            }

            .card-title {
                font-size: 1.4rem;
            }

            .card-title svg {
                width: 20px;
                height: 20px;
            }

            .card-img-top {
                height: 160px;
            }
        }

        @media (max-width: 576px) {
            .header-title {
                font-size: 1.8rem;
            }

            .intro-logistique h2 {
                font-size: 1.6rem;
            }

            .card-logistique {
                padding: 15px;
                min-height: 300px;
            }

            .card-title {
                font-size: 1.3rem;
            }

            .card-text {
                font-size: 0.95rem;
            }

            .card-img-top {
                height: 140px;
            }

            .cta-button {
                font-size: 1rem;
                padding: 10px 20px;
            }

            .card-title svg {
                width: 18px;
                height: 18px;
            }
        }
    </style>

    <!-- Header Start -->
    <header class="header-logistique">
        <div class="container">
            <h1 class="header-title">Département Logistique & Moyens Généraux</h1>
            <nav class="breadcrumb-logistique">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>Département Logistique & Moyens Généraux</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Logistique Start -->
    <section class="section-logistique">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-logistique">
                <h2>Optimisation & Support Opérationnel</h2>
                <p>
                    Le Département Logistique & Moyens Généraux de BTP Consulting assure une gestion fluide des ressources et un soutien logistique efficace pour garantir le succès des projets.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                @php
                    $cards = [
                        [
                            'title' => 'Gestion des Achats & Approvisionnements',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><path d="M3 6h18"></path><path d="M16 10a4 4 0 0 1-8 0"></path></svg>',
                            'text' => 'Optimisation des achats et approvisionnements pour une chaîne logistique performante.',
                            'img' => 'https://i.pinimg.com/736x/09/f5/76/09f5769f71fb7c4162146c4bb75160a1.jpg'
                        ],
                        [
                            'title' => 'Maintenance des Équipements',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>',
                            'text' => 'Entretien des équipements techniques et informatiques pour une disponibilité maximale.',
                            'img' => 'https://i.pinimg.com/736x/0d/11/0e/0d110e1230a8583682b6f00dea855340.jpg'
                        ],
                        [
                            'title' => 'Parc Automobile & Déplacements',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 16H9m10 0h-3.28a2 2 0 0 1-1.96-1.61L12.24 7H4a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h.54a2 2 0 0 1 1.96 1.61L7.76 20H19a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2z"></path><circle cx="6.5" cy="16.5" r="2.5"></circle><circle cx="16.5" cy="16.5" r="2.5"></circle></svg>',
                            'text' => 'Gestion du parc automobile et coordination des déplacements pour une mobilité efficace.',
                            'img' => 'https://i.pinimg.com/736x/35/0f/56/350f56e7ea7fd86ebfa166cccf77785e.jpg'
                        ],
                        [
                            'title' => 'Gestion des Fournitures Internes',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 8a2 2 0 0 0-2-2h-3.69a2 2 0 0 1-1.73-1L14 3a2 2 0 0 0-2-1H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-3.69a2 2 0 0 1 1-1.73L22 14a2 2 0 0 0 0-4z"></path></svg>',
                            'text' => 'Administration des fournitures et équipements pour répondre aux besoins internes.',
                            'img' => 'https://i.pinimg.com/736x/93/58/e0/9358e0b5259815a0c90c8ce089fa6a4b.jpg'
                        ],
                        [
                            'title' => 'Support Technique aux Chantiers',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 0-8 4l4 4"></path><path d="M12 22a10 10 0 0 0 8-4l-4-4"></path><path d="M4 6h16"></path><path d="M4 18h16"></path></svg>',
                            'text' => 'Assistance logistique et technique sur les chantiers pour un déroulement optimal.',
                            'img' => 'https://i.pinimg.com/736x/59/fc/5b/59fc5b1790864c857c0dd947192f522e.jpg'
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-logistique h-100">
                            <img src="{{ $card['img'] }}?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="{{ $card['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {!! $card['svg'] !!} {{ $card['title'] }}
                                </h5>
                                <p class="card-text">{{ $card['text'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Call to Action -->
            <div class="cta-logistique">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Logistique End -->
@endsection
