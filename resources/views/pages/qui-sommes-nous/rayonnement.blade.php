@extends('layouts.app')

@section('title', 'Rayonnement')

@section('content')
    <!-- Inclure Font Awesome si nécessaire -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Rayonnement</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/qui-sommes-nous/apropos') }}">Qui Sommes-Nous</a></li>
                <li class="breadcrumb-item active text-primary">Rayonnement</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Rayonnement Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Introduction -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Rayonnement</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-globe text-primary me-2"></i> Notre Présence Nationale et Internationale
                </h1>
                <p class="mb-0">
                    Chez <strong>BTP Consulting</strong>, notre rayonnement national et international reflète notre engagement à collaborer avec les plus grandes organisations professionnelles pour promouvoir l’excellence en ingénierie.
                </p>
            </div>

            <!-- National Presence -->
            <div class="mb-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Rayonnement National</h2>
                    <div class="divider"></div>
                    <p class="text-muted">Nous sommes fiers de contribuer activement au développement de l’ingénierie au Maroc à travers nos affiliations nationales.</p>
                </div>

                <div class="row g-4">
                    @php
                        $nationalAffiliations = [
                            [
                                'icon' => 'building',
                                'title' => 'CGEM',
                                'description' => 'Membre actif de la Confédération Générale des Entreprises du Maroc, nous participons à la promotion des initiatives entrepreneuriales dans le secteur de l’ingénierie.',
                                'delay' => '0.2s',
                            ],
                            [
                                'icon' => 'users',
                                'title' => 'FMCI',
                                'description' => 'En tant que membre de la Fédération Marocaine du Conseil et de l’Ingénierie, nous contribuons à l’amélioration des standards de l’ingénierie au Maroc.',
                                'delay' => '0.4s',
                            ],
                            [
                                'icon' => 'handshake',
                                'title' => 'Associations Sectorielles',
                                'description' => 'Nous sommes impliqués dans plusieurs associations sectorielles dans les domaines de l’eau, des infrastructures, du transport et de l’environnement.',
                                'delay' => '0.6s',
                            ],
                        ];
                    @endphp

                    @foreach ($nationalAffiliations as $item)
                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ $item['delay'] }}">
                            <div class="affiliation-item text-center p-4 bg-light rounded shadow-sm">
                                <i class="fas fa-{{ $item['icon'] }} fa-3x text-primary mb-3"></i>
                                <h3>{{ $item['title'] }}</h3>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



    <!-- Styles CSS Internes -->
    <style>
        /* Background Header */
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            min-height: 300px;
            display: flex;
            align-items: center;
        }

        /* Divider */
        .divider {
            width: 60px;
            height: 3px;
            background-color: #007bff;
            margin: 15px auto;
        }

        /* Section Title */
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .section-title p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
            color: #6c757d;
        }

        /* Affiliation Item */
        .affiliation-item {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .affiliation-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .affiliation-item i {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 20px;
        }

        .affiliation-item h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .affiliation-item p {
            font-size: 1rem;
            color: #6c757d;
            line-height: 1.6;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .bg-breadcrumb {
                min-height: 250px;
            }

            .affiliation-item {
                padding: 20px;
                min-height: 250px;
            }

            .affiliation-item i {
                font-size: 2rem;
            }

            .affiliation-item h3 {
                font-size: 1.3rem;
            }

            .affiliation-item p {
                font-size: 0.95rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .bg-breadcrumb {
                min-height: 200px;
            }

            .affiliation-item {
                padding: 15px;
                min-height: 200px;
            }

            .affiliation-item i {
                font-size: 1.8rem;
            }

            .affiliation-item h3 {
                font-size: 1.2rem;
            }

            .affiliation-item p {
                font-size: 0.9rem;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }
        }
    </style>
@endsection
