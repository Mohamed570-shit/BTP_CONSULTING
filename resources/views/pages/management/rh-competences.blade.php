@extends('layouts.app')

@section('title', 'Département Ressources Humaines & Gestion des Compétences')

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
        .header-rh {
            background: linear-gradient(45deg, #00695c, #26a69a);
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

        .breadcrumb-rh {
            font-size: 1.1rem;
            text-align: center;
            margin-top: 10px;
        }

        .breadcrumb-rh a, .breadcrumb-rh span {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-rh a:hover, .breadcrumb-rh span {
            color: #ff6f61; /* Corail */
        }

        /* Section Styling */
        .section-rh {
            background: #f0f4f8; /* Gris bleu clair */
            padding: 60px 0;
        }

        /* Introduction */
        .intro-rh {
            text-align: center;
            margin-bottom: 40px;
        }

        .intro-rh h2 {
            font-size: 2.5rem;
            color: #00695c; /* Teal profond */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .intro-rh p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card-rh {
            background: rgba(255, 255, 255, 0.9);
            border: 3px solid transparent;
            border-image: linear-gradient(to right, #00695c, #ff6f61) 1;
            border-radius: 15px;
            padding: 25px;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }

        .card-rh:hover {
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
            color: #00695c;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-title svg {
            margin-right: 10px;
            color: #26a69a; /* Teal clair */
            width: 24px;
            height: 24px;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        /* Call to Action */
        .cta-rh {
            text-align: center;
            margin-top: 40px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #00695c, #ff6f61);
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

            .intro-rh h2 {
                font-size: 2rem;
            }

            .card-rh {
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

            .intro-rh h2 {
                font-size: 1.6rem;
            }

            .card-rh {
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
    <header class="header-rh">
        <div class="container">
            <h1 class="header-title">Département Ressources Humaines & Gestion des Compétences</h1>
            <nav class="breadcrumb-rh">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>Département Ressources Humaines</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Ressources Humaines Start -->
    <section class="section-rh">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-rh">
                <h2>Valorisation du Capital Humain</h2>
                <p>
                    Le Département Ressources Humaines & Gestion des Compétences de BTP Consulting recrute, forme et accompagne les talents pour assurer leur épanouissement et la réussite de l’entreprise.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                @php
                    $cards = [
                        [
                            'title' => 'Recrutement & Intégration',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle><path d="M12 14v8"></path><path d="M8 18h8"></path></svg>',
                            'text' => 'Sélection et accueil des nouveaux collaborateurs pour une intégration réussie.',
                            'img' => 'https://right-performances.com/wp-content/uploads/2019/09/img_recrutement2.jpg'
                        ],
                        [
                            'title' => 'Gestion Administrative',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
                            'text' => 'Administration des contrats, CNSS et AMO pour une conformité totale.',
                            'img' => 'https://i.pinimg.com/736x/35/e6/ec/35e6ec5056bc50713e8eb5c72e2f1047.jpg'
                        ],
                        [
                            'title' => 'Formation & Compétences',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>',
                            'text' => 'Programmes de formation pour développer les compétences du personnel.',
                            'img' => 'https://i.pinimg.com/736x/3b/10/d3/3b10d356e38057a35fe94f0043fc8753.jpg'
                        ],
                        [
                            'title' => 'Gestion des Carrières',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 17.58A5 5 0 0 0 18 15H6a5 5 0 0 0-2 2.58"></path><path d="M12 2v6"></path><path d="M2 12h20"></path></svg>',
                            'text' => 'Accompagnement des parcours professionnels et mobilité interne.',
                            'img' => 'https://i.pinimg.com/736x/f1/09/8a/f1098a3741f892c916ea9283d3bef5ff.jpg'
                        ],
                        [
                            'title' => 'Paie & Avantages Sociaux',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><path d="M12 14v2"></path><path d="M9 16h6"></path></svg>',
                            'text' => 'Gestion précise de la paie et avantages pour la satisfaction des équipes.',
                            'img' => 'https://ga2000.ca/wp-content/uploads/2016/03/slider02-paie.png'
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-rh h-100">
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
            <div class="cta-rh">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Ressources Humaines End -->
@endsection
