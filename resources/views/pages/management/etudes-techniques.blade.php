@extends('layouts.app')

@section('title', 'Département Études Techniques')

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
        .header-etudes {
            background: linear-gradient(45deg, #2e7d32, #4caf50);
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

        .breadcrumb-etudes {
            font-size: 1.1rem;
            text-align: center;
            margin-top: 10px;
        }

        .breadcrumb-etudes a, .breadcrumb-etudes span {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-etudes a:hover, .breadcrumb-etudes span {
            color: #d4a017; /* Doré */
        }

        /* Section Styling */
        .section-etudes {
            background: #f0f4f8; /* Gris bleu clair */
            padding: 60px 0;
        }

        /* Introduction */
        .intro-etudes {
            text-align: center;
            margin-bottom: 40px;
        }

        .intro-etudes h2 {
            font-size: 2.5rem;
            color: #2e7d32; /* Vert profond */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .intro-etudes p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card-etudes {
            background: rgba(255, 255, 255, 0.9);
            border: 3px solid transparent;
            border-image: linear-gradient(to right, #2e7d32, #d4a017) 1;
            border-radius: 15px;
            padding: 25px;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }

        .card-etudes:hover {
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
            color: #2e7d32;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-title svg {
            margin-right: 10px;
            color: #4caf50; /* Vert clair */
            width: 24px;
            height: 24px;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        /* Call to Action */
        .cta-etudes {
            text-align: center;
            margin-top: 40px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #2e7d32, #d4a017);
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

            .intro-etudes h2 {
                font-size: 2rem;
            }

            .card-etudes {
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

            .intro-etudes h2 {
                font-size: 1.6rem;
            }

            .card-etudes {
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
    <header class="header-etudes">
        <div class="container">
            <h1 class="header-title">Département Études Techniques</h1>
            <nav class="breadcrumb-etudes">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>Département Études Techniques</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Études Techniques Start -->
    <section class="section-etudes">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-etudes">
                <h2>Solutions Techniques Innovantes</h2>
                <p>
                    Le Département Études Techniques de BTP Consulting excelle dans la conception de projets durables, précis et adaptés aux besoins modernes de l’ingénierie.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                @php
                    $cards = [
                        [
                            'title' => 'Planification & Contrôle Qualité',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line><path d="M9 16l2 2 4-4"></path></svg>',
                            'text' => 'Coordination efficace des plannings et contrôles qualité pour des livrables irréprochables.',
                            'img' => 'https://i.pinimg.com/736x/f5/e0/00/f5e0000a479ee80b4dc1eee258e71391.jpg'
                        ],
                        [
                            'title' => 'Structures & Ingénierie Civile',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 17V7l-10-5-10 5v10l10 5 10-5z"></path><path d="M6 7l6 3.5 6-3.5"></path><path d="M12 10.5v6"></path></svg>',
                            'text' => 'Conception de structures solides pour des bâtiments et infrastructures pérennes.',
                            'img' => 'https://i.pinimg.com/736x/d8/66/08/d8660859c6b6f30717111f93382028ba.jpg'
                        ],
                        [
                            'title' => 'Ingénierie Hydraulique',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path><path d="M12 4c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"></path><path d="M12 12v8"></path></svg>',
                            'text' => 'Gestion optimale des ressources en eau et réseaux hydrauliques performants.',
                            'img' => 'https://i.pinimg.com/736x/c4/97/91/c497910e59da2ce563dea72913a47ce7.jpg'
                        ],
                        [
                            'title' => 'Environnement & Développement Durable',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h-2a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h2"></path><path d="M12 20h2a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-2"></path><path d="M6 10V6a6 6 0 0 1 12 0v4"></path></svg>',
                            'text' => 'Solutions éco-responsables pour préserver l’environnement et promouvoir la durabilité.',
                            'img' => 'https://i.pinimg.com/736x/40/b9/07/40b9074bac95502e48213dbf0c46de0a.jpg'
                        ],
                        [
                            'title' => 'Aménagement Rural & Développement Agricole',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><path d="M7 10l5-5 5 5"></path><path d="M12 15v-10"></path></svg>',
                            'text' => 'Projets pour revitaliser les zones rurales et soutenir l’agriculture durable.',
                            'img' => 'https://i.pinimg.com/736x/cf/db/c3/cfdbc34da7ace844f30dd712a57a2f55.jpg'
                        ],
                        [
                            'title' => 'Infrastructures & Aménagement Urbain',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="2" width="6" height="14" rx="1"></rect><rect x="14" y="6" width="6" height="14" rx="1"></rect><path d="M2 22h20"></path></svg>',
                            'text' => 'Planification d’espaces urbains modernes et fonctionnels pour les villes de demain.',
                            'img' => 'https://i.pinimg.com/736x/28/8c/a8/288ca8238a5de6f797c7d93cfa95ab04.jpg'
                        ],
                        [
                            'title' => 'Infrastructures de Transport',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h-12"></path><path d="M2 12h20"></path><path d="M18 16h-12"></path><path d="M10 4h4"></path><path d="M8 20h8"></path></svg>',
                            'text' => 'Réseaux de transport efficaces pour une mobilité fluide et durable.',
                            'img' => 'https://i.pinimg.com/736x/4a/ca/bf/4acabf3c7230472680d15df1766b07c6.jpg'
                        ],
                        [
                            'title' => 'Innovation, IA & Ingénierie Intelligente',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v6"></path><path d="M12 16v6"></path><path d="M8 4l4-2 4 2"></path><path d="M8 20l4 2 4-2"></path><path d="M2 12h6"></path><path d="M16 12h6"></path><path d="M4 8l-2 4 2 4"></path><path d="M20 8l2 4-2 4"></path></svg>',
                            'text' => 'Technologies avancées et IA pour des solutions d’ingénierie révolutionnaires.',
                            'img' => 'https://i.pinimg.com/736x/fb/31/20/fb3120513b2997f04af139b55c62285e.jpg'
                        ],
                        [
                            'title' => 'Topographie & Géomatique',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>',
                            'text' => 'Levés topographiques précis et géomatique pour une planification optimale.',
                            'img' => 'https://i.pinimg.com/736x/db/b6/a8/dbb6a8a578480003607593d34a6adc64.jpg'
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-etudes h-100">
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
            <div class="cta-etudes">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Études Techniques End -->
@endsection
