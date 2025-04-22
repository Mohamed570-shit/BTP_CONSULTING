
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <style>
        /* Réinitialisation et styles de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: #333;
        }

        /* Classes utilitaires */
        .text-primary {
            color: #f4511e !important; /* Orange vif */
        }

        .btn-primary {
            background: linear-gradient(to right, #f4511e, #ff8f00);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: transform 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
        }

        .btn-light {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.1rem;
            transition: background 0.3s ease;
        }

        .btn-light:hover {
            background: #fff5e6; /* Orange très clair */
        }

        /* Section Carousel */
        .header-carousel {
            position: relative;
            overflow: hidden;
        }

        .header-carousel-item {
            position: relative;
            min-height: 600px;
        }

        .header-carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-caption {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            padding: 20px;
            direction: rtl; /* Sens d'écriture droite à gauche */
        }

        .carousel-caption h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 1rem;
            text-align: right; /* Alignement à droite pour RTL */
        }

        .carousel-caption h4 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-align: right;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            color: #ddd;
            max-width: 600px;
            margin: 0 auto 2rem;
            text-align: right;
        }

        .carousel-caption .btn {
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .carousel-caption .btn-md-square {
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            margin: 0 5px;
        }

        .carousel-caption .d-flex {
            justify-content: flex-start; /* Inverse l'alignement pour RTL */
        }

        /* Section À Propos */
        .about {
            background: #fbfaf8;
            padding: 80px 0;
        }

        .about h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #d84315;
            margin-bottom: 1.5rem;
        }

        .about p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .about .icon-box {
            display: flex;
            align-items: flex-start;
        }

        .about .icon-box i {
            font-size: 2.5rem;
            color: #f4511e;
            margin-right: 1rem;
        }

        .about .icon-box h4 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #d84315;
            margin-bottom: 0.5rem;
        }

        .about .icon-box p {
            font-size: 1rem;
            color: #666;
        }

        .about img {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Section Offres */
        .offer-section {
            background: #fff;
            padding: 80px 0;
        }

        .offer-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #d84315;
            margin-bottom: 1.5rem;
        }

        .offer-section p {
            font-size: 1.1rem;
            color: #080808;
            max-width: 800px;
            margin: 0 auto 2rem;
        }

        .offer-section .nav-pills {
            background: #fff5e6;
            border-radius: 15px;
            padding: 2rem;
        }

        .offer-section .accordion-link {
            display: block;
            padding: 1rem;
            font-size: 1.2rem;
            font-weight: 600;
            color: #d84315;
            background: #fff;
            border-radius: 10px;
            margin-bottom: 1rem;
            transition: background 0.3s ease;
        }

        .offer-section .accordion-link.active,
        .offer-section .accordion-link:hover {
            background: #f4511e;
            color: #fff;
        }

        .offer-section .tab-content img {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .offer-section .tab-content h1 {
            font-size: 2rem;
            font-weight: 600;
            color: #d84315;
        }

        .offer-section .tab-content p {
            font-size: 1rem;
            color: #090909;
            line-height: 1.8;
        }

        /* Section FAQ */
        .faq-section {
            background: #fbfaf8;
            padding: 80px 0;
        }

        .faq-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #d84315;
            margin-bottom: 1.5rem;
        }

        .faq-section p {
            font-size: 1.1rem;
            color: #090909;
            max-width: 800px;
            margin: 0 auto 2rem;
        }

        .faq-section .accordion {
            background: #fff;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .faq-section .accordion-item {
            border: none;
            margin-bottom: 1rem;
        }

        .faq-section .accordion-button {
            background: #fff5e6;
            color: #d84315;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 10px !important;
            padding: 1.2rem;
            transition: background 0.3s ease;
        }

        .faq-section .accordion-button:not(.collapsed) {
            background: #f4511e;
            color: #fff;
        }

        .faq-section .accordion-button:focus {
            box-shadow: none;
        }

        .faq-section .accordion-body {
            font-size: 1rem;
            color: #060606;
            line-height: 1.8;
            padding: 1.5rem;
        }

        .faq-section img {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Design responsive */
        @media (max-width: 992px) {
            .carousel-caption h1 {
                font-size: 2.5rem;
            }

            .carousel-caption p {
                font-size: 1rem;
            }

            .about h1,
            .offer-section h1,
            .faq-section h1 {
                font-size: 2rem;
            }

            .about img,
            .offer-section img,
            .faq-section img {
                margin-top: 2rem;
            }
        }

        @media (max-width: 576px) {
            .carousel-caption h1 {
                font-size: 1.8rem;
            }

            .carousel-caption h4 {
                font-size: 1.2rem;
            }

            .carousel-caption .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }

            .about h1,
            .offer-section h1,
            .faq-section h1 {
                font-size: 1.6rem;
            }

            .about .icon-box i {
                font-size: 2rem;
            }

            .offer-section .accordion-link {
                font-size: 1rem;
            }

            .faq-section .accordion-button {
                font-size: 0.95rem;
            }
        }
    </style>

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <!-- Slide 1 -->
        <div class="header-carousel-item">
            <img src="{{ asset('asset/img/carousel-3.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-xl-7 animated fadeInRight"> <!-- Changé de fadeInLeft à fadeInRight -->
                            <div class="text-sm-center text-md-start"> <!-- Changé de text-md-end à text-md-start -->
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Bienvenue chez BTP Consulting</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Solutions innovantes pour vos projets</h1>
                                <p class="mb-5 fs-5">Nous vous accompagnons avec expertise dans vos projets de construction et d’ingénierie.</p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4"> <!-- Changé de justify-content-md-end à justify-content-md-start -->
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 me-2" href="contact.html">Contactez-nous</a>
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 ms-2" href="etudes-techniques.html">Nos services</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-start"> <!-- Changé de justify-content-md-end à justify-content-md-start -->
                                    <div class="d-flex justify-content-start ms-2"> <!-- Changé de justify-content-end à justify-content-start -->
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://www.linkedin.com/company/btpconsulting"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-0 col-xl-5"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="header-carousel-item">
            <img src="{{ asset('asset/img/carousel-4.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-xl-7 animated fadeInRight">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Expertise et innovation</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Construisons l’avenir ensemble</h1>
                                <p class="mb-5 fs-5">De l’étude technique à la réalisation, nous sommes à vos côtés à chaque étape.</p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="realisations.html">Nos projets</a>
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="a-propos.html">En savoir plus</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="d-flex justify-content-start ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-0 col-xl-5"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="header-carousel-item">
            <img src="{{ asset('asset/img/carousel-6.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-xl-7 animated fadeInRight">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Nos engagements</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Qualité, sécurité, durabilité</h1>
                                <p class="mb-5 fs-5">Des valeurs fortes pour des projets responsables et pérennes.</p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="certifications.html">Nos certifications</a>
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="nos-valeurs.html">Nos valeurs</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="d-flex justify-content-start ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-0 col-xl-5"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="header-carousel-item">
            <img src="{{ asset('asset/img/carousel-7.jpg') }}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-0 gx-5">
                        <div class="col-xl-7 animated fadeInRight">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Notre équipe</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Des experts à votre service</h1>
                                <p class="mb-5 fs-5">Une équipe compétente pour concrétiser vos projets ambitieux.</p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Nos métiers</a>
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#">Rencontrez-nous</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                    <div class="d-flex justify-content-start ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-0 col-xl-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- À Propos Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">À propos de nous</h4>
                        <h1 class="display-5 mb-4">Découvrez notre entreprise</h1>
                        <p class="mb-4">BTP CONSULTING est un bureau d’études spécialisé dans le conseil et la gestion de projets BTP CONSULTING. Nous proposons des solutions sur mesure pour garantir qualité, sécurité et rentabilité à vos projets. Notre équipe d’experts vous accompagne de la conception à la réalisation de vos projets de construction et d’infrastructure.</p>

                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex icon-box">
                                    <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Conseil stratégique</h4>
                                        <p>Nous offrons des services de conseil spécialisés pour optimiser la gestion, la planification et la rentabilité de vos projets, assurant leur succès.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex icon-box">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Expertise confirmée</h4>
                                        <p>Avec des années d’expérience dans le BTP CONSULTING, nous mettons notre savoir-faire à votre service pour garantir la réussite de vos projets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="service.html" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Nos services</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex icon-box">
                                    <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Contactez-nous</h4>
                                        <p class="mb-0 fs-5" style="letter-spacing: 1px;">+212 7080 808 0807</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="{{ asset('asset/img/morad.png') }}" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- À Propos End -->


    <!-- FAQ Start -->
    <section class="faq-section container-fluid py-5">
        <div class="container py-5">
            <!-- FAQ Header -->
            <header class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Questions fréquentes</h4>
                <h1 class="display-5 mb-4">Réponses à vos interrogations</h1>
                <p class="mb-0">Retrouvez nos réponses aux questions les plus courantes sur nos expertises en génie civil, de la conception durable à l’innovation technologique.</p>
            </header>

            <!-- FAQ Content -->
            <div class="row g-5 align-items-center">
                <!-- FAQ Accordion -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Comment concevez-vous des bâtiments durables ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous intégrons l’éco-conception, le BIM et les technologies intelligentes pour créer des bâtiments éco-énergétiques, durables et conformes aux normes de sécurité.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Quelles solutions pour la gestion de l’eau ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous proposons des réseaux d’eau potable, des systèmes d’irrigation, le traitement des eaux usées et des stations de pompage pour une gestion optimale.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Comment évaluez-vous l’impact environnemental ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous réalisons des études d’impact (EIE) et des audits pour analyser les effets sur l’environnement, en proposant des solutions durables.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Quelles approches pour les infrastructures routières ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous concevons des routes et ouvrages hydrauliques routiers, en assurant stabilité, sécurité et intégration des systèmes de drainage.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Comment intégrez-vous l’innovation ?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous utilisons le BIM, l’IA, les drones et la photogrammétrie pour optimiser la conception et la gestion des projets avec précision.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Comment choisissez-vous les fondations ?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous analysons les sols via des études géotechniques pour sélectionner des fondations adaptées, garantissant la stabilité des structures.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Image -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded">
                        <img src="{{ asset('asset/img/Q1.jpg') }}" class="img-fluid w-100" alt="Projet de génie civil">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ End -->
@endsection

