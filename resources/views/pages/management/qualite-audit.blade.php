@extends('layouts.app')

@section('title', 'Département Qualité & Audit Technique')

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
        .header-quality {
            background: linear-gradient(45deg, #0072ff, #00c6ff);
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

        .breadcrumb-quality {
            font-size: 1.1rem;
            text-align: center;
            margin-top: 10px;
        }

        .breadcrumb-quality a, .breadcrumb-quality span {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-quality a:hover, .breadcrumb-quality span {
            color: #ff6b6b; /* Rouge corail */
        }

        /* Section Styling */
        .section-quality {
            background: #f0f4f8; /* Gris bleu clair */
            padding: 60px 0;
        }

        /* Introduction */
        .intro-quality {
            text-align: center;
            margin-bottom: 40px;
        }

        .intro-quality h2 {
            font-size: 2.5rem;
            color: #0072ff; /* Bleu vif */
            font-weight: 600;
            margin-bottom: 15px;
        }

        .intro-quality p {
            font-size: 1.2rem;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Card Styling */
        .card-quality {
            background: rgba(255, 255, 255, 0.9);
            border: 3px solid transparent;
            border-image: linear-gradient(to right, #0072ff, #ff6b6b) 1;
            border-radius: 15px;
            padding: 25px;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease;
        }

        .card-quality:hover {
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
            color: #0072ff;
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
        .cta-quality {
            text-align: center;
            margin-top: 40px;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, #0072ff, #ff6b6b);
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

            .intro-quality h2 {
                font-size: 2rem;
            }

            .card-quality {
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

            .intro-quality h2 {
                font-size: 1.6rem;
            }

            .card-quality {
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
    <header class="header-quality">
        <div class="container">
            <h1 class="header-title">Département Qualité & Audit Technique</h1>
            <nav class="breadcrumb-quality">
                <a href="{{ url('/') }}">Accueil</a> /
                <a href="{{ url('/qui-sommes-nous/apropos') }}">Management</a> /
                <span>Département Qualité & Audit Technique</span>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Quality Start -->
    <section class="section-quality">
        <div class="container">
            <!-- Introduction -->
            <div class="intro-quality">
                <h2>Garantir l'Excellence et la Conformité</h2>
                <p>
                    Le Département Qualité & Audit Technique de BTP Consulting veille à l’excellence des livrables, à la conformité réglementaire et à l’amélioration continue des processus grâce à des audits rigoureux et une expertise technique pointue.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                @php
                    $cards = [
                        [
                            'title' => 'Audit Technique & Diagnostic',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M15 9l-6 6"></path><path d="M9 9l6 6"></path></svg>',
                            'text' => 'Inspection et diagnostic précis des désordres pour garantir la fiabilité des ouvrages.',
                            'img' => 'https://i.pinimg.com/736x/f9/ef/65/f9ef651e4e796472476d4acf1b3a0b44.jpg'
                        ],
                        [
                            'title' => 'Contrôle Qualité des Livrables',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"></path></svg>',
                            'text' => 'Validation rigoureuse des livrables pour assurer leur conformité aux standards de qualité.',
                            'img' => 'https://jimsports.com/wp-content/uploads/2020/08/calidad-1024x614.jpg'
                        ],
                        [
                            'title' => 'Conformité Réglementaire',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20"></path><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>',
                            'text' => 'Respect des normes et réglementations en vigueur pour une exécution irréprochable.',
                            'img' => 'https://aet-us.com/wp-content/uploads/2020/02/Conformit%C3%A9-r%C3%A9glementaire-3.png'
                        ],
                        [
                            'title' => 'Veille Technique & Réglementaire',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>',
                            'text' => 'Suivi des évolutions techniques et réglementaires pour une conformité proactive.',
                            'img' => 'https://qualitexpert-dz.com/wp-content/uploads/2021/01/veille-HSE.png'
                        ],
                        [
                            'title' => 'Management ISO 9001',
                            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>',
                            'text' => 'Mise en œuvre et suivi des exigences ISO 9001 pour un système qualité performant.',
                            'img' => 'https://www.certification-qse.com/wp-content/uploads/2016/11/ISO-9001.jpg'
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="col-lg-4 col-md-6">
                        <div class="card-quality h-100">
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
            <div class="cta-quality">
                <a href="{{ url('/contact') }}" class="cta-button">Contactez le Département</a>
            </div>
        </div>
    </section>
    <!-- Quality End -->
@endsection
