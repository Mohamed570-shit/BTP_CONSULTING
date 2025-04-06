@extends('layouts.app')

@section('title', 'Rayonnement')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Rayonnement</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
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

            <!-- Rayonnement National Section -->
            <div class="mb-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Rayonnement National</h2>
                    <div class="divider"></div>
                    <p class="text-muted">Nous sommes fiers de contribuer activement au développement de l’ingénierie au Maroc à travers nos affiliations nationales.</p>
                </div>
                <div class="row g-4">
                    <!-- CGEM -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="affiliation-item">
                            <i class="fas fa-building"></i>
                            <h3>CGEM</h3>
                            <p>
                                Membre actif de la Confédération Générale des Entreprises du Maroc, nous participons à la promotion des initiatives entrepreneuriales dans le secteur de l’ingénierie.
                            </p>
                        </div>
                    </div>
                    <!-- FMCI -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="affiliation-item">
                            <i class="fas fa-users"></i>
                            <h3>FMCI</h3>
                            <p>
                                En tant que membre de la Fédération Marocaine du Conseil et de l’Ingénierie, nous contribuons à l’amélioration des standards de l’ingénierie au Maroc.
                            </p>
                        </div>
                    </div>
                    <!-- Associations Sectorielles -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="affiliation-item">
                            <i class="fas fa-handshake"></i>
                            <h3>Associations Sectorielles</h3>
                            <p>
                                Nous sommes impliqués dans plusieurs associations sectorielles dans les domaines de l’eau, des infrastructures, du transport et de l’environnement.
                            </p>
                        </div>
                    </div>
                    <!-- Bouton d’action -->
                    <div class="text-center mt-4 wow fadeInUp" data-wow-delay="0.8s">
                        <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-2 px-4">
                            <i class="fas fa-info-circle me-2"></i> En savoir plus sur notre impact national
                        </a>
                    </div>
                </div>
            </div>

            <!-- Rayonnement International Section -->
            <div class="mb-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Rayonnement International</h2>
                    <div class="divider"></div>
                    <p class="text-muted">Notre présence internationale renforce notre expertise grâce à des collaborations avec des organisations mondiales de renom.</p>
                </div>
                <div class="row g-4">
                    <!-- FIDIC -->
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="affiliation-item">
                            <i class="fas fa-globe-africa"></i>
                            <h3>FIDIC</h3>
                            <p>
                                Affilié à la Fédération Internationale des Ingénieurs-Conseil, nous adhérons aux standards mondiaux de l’ingénierie.
                            </p>
                        </div>
                    </div>
                    <!-- GAMA -->
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="affiliation-item">
                            <i class="fas fa-map-marked-alt"></i>
                            <h3>GAMA</h3>
                            <p>
                                Membre du Group of African Member Associations of FIDIC, nous participons au développement de l’ingénierie en Afrique.
                            </p>
                        </div>
                    </div>
                    <!-- FCIC -->
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="affiliation-item">
                            <i class="fas fa-hands-helping"></i>
                            <h3>FCIC</h3>
                            <p>
                                En tant que membre de la Fédération des Consultants des Pays Islamiques, nous collaborons avec des experts de la région.
                            </p>
                        </div>
                    </div>
                    <!-- FCAA -->
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="affiliation-item">
                            <i class="fas fa-globe"></i>
                            <h3>FCAA</h3>
                            <p>
                                Affilié à la Fédération des Consultants Africains et Arabes, nous renforçons notre présence régionale.
                            </p>
                        </div>
                    </div>
                    <!-- Bouton d’action -->
                    <div class="text-center mt-4 wow fadeInUp" data-wow-delay="1s">
                        <a href="{{ url('/contact') }}" class="btn btn-primary rounded-pill py-2 px-4">
                            <i class="fas fa-info-circle me-2"></i> En savoir plus sur notre impact international
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rayonnement End -->

    <!-- Styles CSS -->
    <style>
        /* Divider pour les sections */
        .divider {
            width: 60px;
            height: 3px;
            background-color: #ff6200; /* Orange pour cohérence avec le thème */
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

        /* Conteneur des éléments d’affiliation */
        .affiliation-item {
            background-color: #fff;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%; /* Uniformise la hauteur dans la grille */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Effet au survol */
        .affiliation-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Icônes */
        .affiliation-item i {
            font-size: 2.5rem;
            color: #ff6200; /* Orange pour les icônes */
            margin-bottom: 20px;
        }

        /* Titres des affiliations */
        .affiliation-item h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #007bff; /* Bleu pour les titres */
            margin-bottom: 15px;
        }

        /* Texte descriptif */
        .affiliation-item p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        /* Bouton d’action */
        .btn-primary {
            background-color: #ff6200;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff6200;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .affiliation-item {
                padding: 20px;
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
            .affiliation-item {
                padding: 15px;
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