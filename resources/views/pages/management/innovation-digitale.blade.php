@extends('layouts.app')

@section('title', 'Département Innovation & Transition Digitale')

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
        .header-innovation {
            background: linear-gradient(45deg, #8e2de2, #4a00e0);
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

        .breadcrumb-innovation {
            font-size: 1.1rem;
            text-align: center;
            margin-top: 10px;
        }

        .breadcrumb-innovation a, .breadcrumb-innovation span {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-innovation a:hover, .breadcrumb-innovation span {
            color: #ff758c; /* Rose vif */
        }

        /* Section Styling */
        .section-innovation {
            background: #f0f4f8; /* Gris bleu clair */
            padding: 60px 0;
        }

        /* Introduction */
        .intro-innovation {
            text-align: center;
            margin-bottom: 40px;
        }

        .intro-innovation h2 {
            font-size: 2.5rem;
            color: #4a00e0; /* Violet profond */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .intro-innovation p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card-innovation {
            background: rgba(255, 255, 255, 0.9);
            border: 3px solid transparent;
            border-image: linear-gradient(to right, #8e2de2, #ff758c) 1;
            border-radius: 15px;
            padding: 25px;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }

        .card-innovation:hover {
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
            color: #4a00e0;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-title svg {
            margin-right: 10px;
            color: #00d4b4; /* Turquoise */
            width: 24px;
            height: 24px;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        /* Call to Action */
        .cta-innovation {
            text-align: center;
            margin-top: 40px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #8e2de2, #ff758c);
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

            .intro-innovation h2 {
                font-size: 2rem;
            }

            .card-innovation {
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

            .intro-innovation h2 {
                font-size: 1.6rem;
            }

            .card-innovation {
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
    <header class="header-innovation">
        <div class="container">
            <h1 class="header-title">Département Innovation & Transition Digitale</h1>
            <nav class="breadcrumb-innovation">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>Département Innovation & Transition Digitale</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Innovation Start -->
    <section class="section-innovation">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-innovation">
                <h2>Pionniers du Futur Numérique</h2>
                <p>
                    Le Département Innovation & Transition Digitale de BTP Consulting transforme l’entreprise grâce à des solutions numériques avancées, une automatisation intelligente et une sécurité renforcée.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                @php
                    $cards = [
                        [
                            'title' => 'Développement Digital Interne',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
                            'text' => 'Création d’applications et dashboards pour optimiser les opérations internes.',
                            'img' => 'https://i.pinimg.com/736x/fb/67/a8/fb67a89f3b5181f5b3443f6de227e296.jpg'
                        ],
                        [
                            'title' => 'Automatisation des Processus Métier',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4"></path><path d="M12 18v4"></path><path d="M4.93 4.93l2.83 2.83"></path><path d="M16.24 16.24l2.83 2.83"></path><path d="M2 12h4"></path><path d="M18 12h4"></path><path d="M4.93 19.07l2.83-2.83"></path><path d="M16.24 7.76l2.83-2.83"></path></svg>',
                            'text' => 'Automatisation des workflows pour une efficacité accrue et moins d’erreurs.',
                            'img' => 'https://i.pinimg.com/736x/44/09/f3/4409f36659f44eb7bca9acc5c46ffb9e.jpg'
                        ],
                        [
                            'title' => 'Sécurité Numérique & Données',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2c-4.42 0-8 2.24-8 5v5c0 2.76 3.58 5 8 5s8-2.24 8-5V7c0-2.76-3.58-5-8-5z"></path><path d="M12 17v-5"></path><circle cx="12" cy="12" r="2"></circle></svg>',
                            'text' => 'Protection des données et systèmes contre les cybermenaces modernes.',
                            'img' => 'https://i.pinimg.com/736x/e2/dc/04/e2dc049ebeeea718d0abef19e927aa33.jpg'
                        ],
                        [
                            'title' => 'Transformation Digitale & Formation',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="6" y1="8" x2="18" y2="8"></line><line x1="6" y1="12" x2="18" y2="12"></line><line x1="6" y1="16" x2="10" y2="16"></line></svg>',
                            'text' => 'Accompagnement et formation pour une adoption fluide des outils numériques.',
                            'img' => 'https://i.pinimg.com/736x/8b/f1/74/8bf1747c90f969554c70756cd85709ba.jpg'
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-innovation h-100">
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
            <div class="cta-innovation">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Innovation End -->
@endsection
