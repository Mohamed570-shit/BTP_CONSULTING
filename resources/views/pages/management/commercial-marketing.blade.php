@extends('layouts.app')

@section('title', 'Département Marchés & Marketing')

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
        .header-marketing {
            background: linear-gradient(45deg, #b71c1c, #d32f2f);
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

        .breadcrumb-marketing {
            font-size: 1.1rem;
            text-align: center;
            margin-top: 10px;
        }

        .breadcrumb-marketing a, .breadcrumb-marketing span {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-marketing a:hover, .breadcrumb-marketing span {
            color: #f9a825; /* Doré */
        }

        /* Section Styling */
        .section-marketing {
            background: #f0f4f8; /* Gris bleu clair */
            padding: 60px 0;
        }

        /* Introduction */
        .intro-marketing {
            text-align: center;
            margin-bottom: 40px;
        }

        .intro-marketing h2 {
            font-size: 2.5rem;
            color: #b71c1c; /* Rouge profond */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .intro-marketing p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card-marketing {
            background: rgba(255, 255, 255, 0.9);
            border: 3px solid transparent;
            border-image: linear-gradient(to right, #b71c1c, #f9a825) 1;
            border-radius: 15px;
            padding: 25px;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }

        .card-marketing:hover {
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
            color: #b71c1c;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-title svg {
            margin-right: 10px;
            color: #d32f2f; /* Rouge clair */
            width: 24px;
            height: 24px;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        /* Call to Action */
        .cta-marketing {
            text-align: center;
            margin-top: 40px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #b71c1c, #f9a825);
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

            .intro-marketing h2 {
                font-size: 2rem;
            }

            .card-marketing {
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

            .intro-marketing h2 {
                font-size: 1.6rem;
            }

            .card-marketing {
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
    <header class="header-marketing">
        <div class="container">
            <h1 class="header-title">Département Marchés & Marketing</h1>
            <nav class="breadcrumb-marketing">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>Département Marchés & Marketing</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Marchés & Marketing Start -->
    <section class="section-marketing">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-marketing">
                <h2>Dynamisme & Visibilité</h2>
                <p>
                    Le Département Marchés & Marketing de BTP Consulting propulse l’entreprise grâce à des stratégies audacieuses, une présence digitale forte et des partenariats stratégiques.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                @php
                    $cards = [
                        [
                            'title' => 'Gestion des Appels d’Offres',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
                            'text' => 'Réponses rapides et conformes aux appels d’offres pour saisir les opportunités.',
                            'img' => 'https://i.pinimg.com/736x/71/f7/c1/71f7c15bad02ceaaeb342bb0e6d07c40.jpg'
                        ],
                        [
                            'title' => 'Développement & Fidélisation Clients',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>',
                            'text' => 'Relations client solides pour une fidélité durable et un développement continu.',
                            'img' => 'https://i.pinimg.com/736x/9d/a5/0e/9da50eaefc7a95e08a04765efbbdf8e0.jpg'
                        ],
                        [
                            'title' => 'Marketing & Communication Digitale',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h20"></path><path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3"></path><path d="M7 8l5 3 5-3"></path><path d="M12 11v5"></path></svg>',
                            'text' => 'Campagnes digitales percutantes pour une visibilité accrue.',
                            'img' => 'https://i.pinimg.com/736x/97/bb/c3/97bbc3ecd90c4e146d4730cd64e8efa5.jpg'
                        ],
                        [
                            'title' => 'Relations Institutionnelles & Partenariats',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>',
                            'text' => 'Réseaux stratégiques avec institutions pour renforcer la position de l’entreprise.',
                            'img' => 'https://i.pinimg.com/736x/86/a8/b3/86a8b3e8fcd1f357a82afa26399ed208.jpg'
                        ],
                        [
                            'title' => 'Référencement & Certification',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>',
                            'text' => 'Certifications obtenues pour garantir crédibilité et excellence.',
                            'img' => 'https://i.pinimg.com/736x/17/23/c8/1723c862052a5c7e4f28074bc85e4887.jpg'
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-marketing h-100">
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
            <div class="cta-marketing">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Marchés & Marketing End -->
@endsection
