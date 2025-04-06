@extends('layouts.app')

@section('title', 'Politique Ressources Humaines')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Politique Ressources Humaines</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/realisations/projets-recents') }}">Réalisations</a></li>
                <li class="breadcrumb-item active text-primary">Politique Ressources Humaines</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Politique RH Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <!-- Introduction -->
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Politique Ressources Humaines</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-users text-primary me-2"></i> Notre Engagement envers Nos Talents
                </h1>
                <p class="mb-0">
                    Chez <strong>BTP Consulting</strong>, nous plaçons nos collaborateurs au cœur de notre réussite. Notre politique RH vise à attirer, développer et fidéliser les talents pour construire une équipe performante et innovante.
                </p>
            </div>

            <!-- Sections RH -->
            <!-- Recrutement -->
            <div class="mb-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Recrutement</h2>
                    <div class="divider"></div>
                    <p class="text-muted">Nous recherchons des profils diversifiés et compétents pour enrichir notre équipe.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="rh-item">
                            <i class="fas fa-user-plus"></i>
                            <h3>Processus Sélectif</h3>
                            <p>
                                Un recrutement basé sur les compétences, l’expérience et les valeurs humaines, avec des entretiens approfondis et des tests adaptés.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="rh-item">
                            <i class="fas fa-search"></i>
                            <h3>Diversité des Talents</h3>
                            <p>
                                Nous valorisons la diversité et encourageons les candidatures de tous horizons pour une équipe riche et dynamique.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Développement -->
            <div class="mb-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Développement Professionnel</h2>
                    <div class="divider"></div>
                    <p class="text-muted">Nous investissons dans la formation et l’évolution de nos collaborateurs.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="rh-item">
                            <i class="fas fa-graduation-cap"></i>
                            <h3>Formations Continues</h3>
                            <p>
                                Des programmes de formation réguliers pour maintenir nos équipes à la pointe des technologies et des pratiques d’ingénierie.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="rh-item">
                            <i class="fas fa-chart-line"></i>
                            <h3>Évolution de Carrière</h3>
                            <p>
                                Des opportunités de promotion interne et des plans de carrière personnalisés pour accompagner la croissance de nos talents.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bien-être -->
            <div class="mb-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Bien-être au Travail</h2>
                    <div class="divider"></div>
                    <p class="text-muted">Nous créons un environnement de travail sain et motivant.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="rh-item">
                            <i class="fas fa-heart"></i>
                            <h3>Équilibre Vie Pro/Vie Perso</h3>
                            <p>
                                Des horaires flexibles et des initiatives pour garantir un équilibre entre vie professionnelle et personnelle.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="rh-item">
                            <i class="fas fa-smile"></i>
                            <h3>Culture d’Entreprise</h3>
                            <p>
                                Une culture basée sur le respect, la collaboration et la reconnaissance des efforts de chacun.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.2s">
                <a href="{{ url('/recrutement/offres-emploi') }}" class="btn btn-primary rounded-pill py-3 px-5">
                    <i class="fas fa-briefcase me-2"></i> Rejoignez Notre Équipe
                </a>
            </div>
        </div>
    </div>
    <!-- Politique RH End -->

    <!-- Styles CSS -->
    <style>
        /* Divider pour les sections */
        .divider {
            width: 60px;
            height: 3px;
            background-color: #ff6200;
            margin: 15px auto;
        }

        /* Style des titres de section */
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
        }

        /* Conteneur des éléments RH */
        .rh-item {
            background-color: #fff;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Effet au survol */
        .rh-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Icônes */
        .rh-item i {
            font-size: 2.5rem;
            color: #ff6200;
            margin-bottom: 20px;
        }

        /* Titres des éléments RH */
        .rh-item h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #007bff;
            margin-bottom: 15px;
        }

        /* Texte descriptif */
        .rh-item p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        /* Bouton d’action */
        .btn-primary {
            background-color: #ff6200;
            border: none;
            font-size: 1.1rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e7a983;
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .rh-item {
                padding: 20px;
            }
            .rh-item i {
                font-size: 2rem;
            }
            .rh-item h3 {
                font-size: 1.3rem;
            }
            .rh-item p {
                font-size: 0.95rem;
            }
            .section-title h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .rh-item {
                padding: 15px;
            }
            .rh-item i {
                font-size: 1.8rem;
            }
            .rh-item h3 {
                font-size: 1.2rem;
            }
            .rh-item p {
                font-size: 0.9rem;
            }
            .section-title h2 {
                font-size: 1.8rem;
            }
            .btn-primary {
                font-size: 1rem;
                padding: 10px 20px;
            }
        }
    </style>
@endsection