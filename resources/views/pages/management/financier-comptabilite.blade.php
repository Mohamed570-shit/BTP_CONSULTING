@extends('layouts.app')

@section('title', 'Département Financier & Comptabilité')

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
        .header-finance {
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

        .breadcrumb-finance {
            font-size: 1.1rem;
            text-align: center;
            margin-top: 10px;
        }

        .breadcrumb-finance a, .breadcrumb-finance span {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-finance a:hover, .breadcrumb-finance span {
            color: #ff758c; /* Rose vif */
        }

        /* Section Styling */
        .section-finance {
            background: #f0f4f8; /* Gris bleu clair */
            padding: 60px 0;
        }

        /* Introduction */
        .intro-finance {
            text-align: center;
            margin-bottom: 40px;
        }

        .intro-finance h2 {
            font-size: 2.5rem;
            color: #4a00e0; /* Violet profond */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .intro-finance p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card-finance {
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

        .card-finance:hover {
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
        .cta-finance {
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

            .intro-finance h2 {
                font-size: 2rem;
            }

            .card-finance {
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

            .intro-finance h2 {
                font-size: 1.6rem;
            }

            .card-finance {
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
    <header class="header-finance">
        <div class="container">
            <h1 class="header-title">Département Financier & Comptabilité</h1>
            <nav class="breadcrumb-finance">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>Département Financier & Comptabilité</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Finance Start -->
    <section class="section-finance">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-finance">
                <h2>Excellence Financière</h2>
                <p>
                    Le Département Financier & Comptabilité de BTP Consulting assure une gestion précise et stratégique des finances, soutenant la croissance et la conformité de l’entreprise.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                @php
                    $cards = [
                        [
                            'title' => 'Comptabilité Générale & Analytique',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="6" y1="8" x2="6" y2="16"></line><line x1="10" y1="8" x2="10" y2="16"></line><line x1="14" y1="8" x2="14" y2="16"></line><line x1="18" y1="8" x2="18" y2="16"></line></svg>',
                            'text' => 'Comptabilité rigoureuse avec analyses détaillées pour une vision claire.',
                            'img' => 'https://i.pinimg.com/736x/1a/cc/ae/1accaee8fc1cb2e448f06c280b1c0fbc.jpg'
                        ],
                        [
                            'title' => 'Gestion Budgétaire & Suivi Financier',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h4v10H5z"></path><path d="M10 5h4v12h-4z"></path><path d="M15 9h4v8h-4z"></path></svg>',
                            'text' => 'Budgets optimisés et suivi précis des projets pour maximiser les résultats.',
                            'img' => 'https://i.pinimg.com/736x/1a/f9/73/1af973a4a404abc219649717062111fd.jpg'
                        ],
                        [
                            'title' => 'Trésorerie & Relations Bancaires',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"></circle><path d="M12 2v4"></path><path d="M12 18v4"></path><path d="M2 12h4"></path><path d="M18 12h4"></path></svg>',
                            'text' => 'Gestion des flux et partenariats bancaires pour une trésorerie saine.',
                            'img' => 'https://i.pinimg.com/736x/bf/3a/be/bf3abe4a544e8c301ccb34f84bb10ada.jpg'
                        ],
                        [
                            'title' => 'Contrôle de Gestion & Audit Interne',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>',
                            'text' => 'Audits internes et contrôles pour une performance transparente.',
                            'img' => 'https://i.pinimg.com/736x/af/16/f3/af16f3391aae9dfcad8235cdad545331.jpg'
                        ],
                        [
                            'title' => 'Reporting Financier & Fiscalité',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="18"></line></svg>',
                            'text' => 'Rapports clairs et conformité fiscale pour une gouvernance solide.',
                            'img' => 'https://i.pinimg.com/736x/14/42/bc/1442bcd51ebc24d9d10512d99480d551.jpg'
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-finance h-100">
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
            <div class="cta-finance">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Finance End -->
@endsection
