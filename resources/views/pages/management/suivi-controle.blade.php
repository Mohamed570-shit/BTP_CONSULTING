@extends('layouts.app')

@section('title', 'Département Suivi & Contrôle des Travaux')

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
        .header-works {
            background: linear-gradient(45deg, #1a3c34, #2a9d8f);
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

        .breadcrumb-works {
            font-size: 1.1rem;
            text-align: center;
            margin-top: 10px;
        }

        .breadcrumb-works a, .breadcrumb-works span {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-works a:hover, .breadcrumb-works span {
            color: #e9c46a; /* Jaune moutarde */
        }

        /* Section Styling */
        .section-works {
            background: #f0f4f8; /* Gris bleu clair */
            padding: 60px 0;
        }

        /* Introduction */
        .intro-works {
            text-align: center;
            margin-bottom: 40px;
        }

        .intro-works h2 {
            font-size: 2.5rem;
            color: #1a3c34; /* Vert profond */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .intro-works p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card-works {
            background: rgba(255, 255, 255, 0.9);
            border: 3px solid transparent;
            border-image: linear-gradient(to right, #1a3c34, #e9c46a) 1;
            border-radius: 15px;
            padding: 25px;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }

        .card-works:hover {
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
            color: #1a3c34;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-title svg {
            margin-right: 10px;
            color: #2a9d8f; /* Vert turquoise */
            width: 24px;
            height: 24px;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        /* Call to Action */
        .cta-works {
            text-align: center;
            margin-top: 40px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #1a3c34, #e9c46a);
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

            .intro-works h2 {
                font-size: 2rem;
            }

            .card-works {
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

            .intro-works h2 {
                font-size: 1.6rem;
            }

            .card-works {
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
    <header class="header-works">
        <div class="container">
            <h1 class="header-title">Département Suivi & Contrôle des Travaux</h1>
            <nav class="breadcrumb-works">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>Département Suivi & Contrôle des Travaux</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Works Start -->
    <section class="section-works">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-works">
                <h2>Maîtrise et Excellence des Chantiers</h2>
                <p>
                    Le Département Suivi & Contrôle des Travaux de BTP Consulting assure une gestion rigoureuse des chantiers, de la planification à la réception, en garantissant qualité, sécurité et conformité.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                @php
                    $cards = [
                        [
                            'title' => 'Ordonnancement, Pilotage, Coordination',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>',
                            'text' => 'Planification précise et coordination des intervenants pour respecter les délais.',
                            'img' => 'https://gbeconomie.fr/wp-content/uploads/2019/07/1-4-1200x889.jpg'
                        ],
                        [
                            'title' => 'Supervision & Contrôle Qualité',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v8"></path><path d="M8 12h8"></path></svg>',
                            'text' => 'Suivi technique et contrôle des normes pour des livrables conformes.',
                            'img' => 'https://thumbs.dreamstime.com/z/contr-le-de-qualit%C3%A9-40072057.jpg'
                        ],
                        [
                            'title' => 'Sécurité & Prévention des Risques',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7v10l10 5 10-5V7l-10-5z"></path><path d="M12 12l-6-3"></path><path d="M12 12l6-3"></path><path d="M12 12v9"></path></svg>',
                            'text' => 'Gestion proactive des risques et sensibilisation pour des chantiers sécurisés.',
                            'img' => 'https://i.pinimg.com/736x/7e/9e/a0/7e9ea01a0d7b4c49976ffdd232a8e171.jpg'
                        ],
                        [
                            'title' => 'Paiement & Facturation',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>',
                            'text' => 'Validation des paiements et suivi financier lié à l’avancement des travaux.',
                            'img' => 'https://i.pinimg.com/736x/4e/05/46/4e05464357c70f65ccfb50cd32ce6b08.jpg'
                        ],
                        [
                            'title' => 'Réception & Expertise Post-Travaux',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect><path d="M9 14l2 2 4-4"></path></svg>',
                            'text' => 'Organisation des réceptions et assistance technique après livraison.',
                            'img' => 'https://i.pinimg.com/736x/3b/2f/15/3b2f15a6f1f9b5bd7336426d5706b366.jpg'
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-works h-100">
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
            <div class="cta-works">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Works End -->
@endsection
