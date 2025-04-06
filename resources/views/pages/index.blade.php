@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

          <!-- Carousel Start -->
          <div class="header-carousel owl-carousel">
            <!-- Slide 1 -->
            <div class="header-carousel-item">
                <img src="{{ asset('asset/img/carousel-3.jpg') }}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Bienvenue Chez BTP Consulting</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Des Solutions Innovantes Pour Vos Projets</h1>
                                    <p class="mb-5 fs-5">Nous vous accompagnons avec expertise dans vos projets de construction et d’ingénierie.</p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="etudes-techniques.html">Nos Services</a>
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="contact.html">Contactez-nous</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <h2 class="text-white me-2"></h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href="https://www.linkedin.com/company/btpconsulting"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Expertise & Innovation</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Bâtissons Ensemble l’Avenir</h1>
                                    <p class="mb-5 fs-5">Des études techniques à la réalisation, nous sommes à vos côtés à chaque étape.</p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="a-propos.html">En savoir plus</a>
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="realisations.html">Voir Nos Projets</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <h2 class="text-white me-2"></h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Nos Engagements</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Qualité, Sécurité & Développement Durable</h1>
                                    <p class="mb-5 fs-5">Des valeurs fortes pour des projets responsables et durables.</p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="nos-valeurs.html">Nos Valeurs</a>
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="certifications.html">Nos Certifications</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <h2 class="text-white me-2"></h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">Notre Équipe</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">Des Experts à Votre Service</h1>
                                    <p class="mb-5 fs-5">Une équipe compétente et dévouée pour concrétiser vos projets les plus ambitieux.</p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#">Rencontrez-nous</a>
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Nos Métiers</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <h2 class="text-white me-2"></h2>
                                        <div class="d-flex justify-content-end ms-2">
                                            <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Carousel End -->

    </div>
    <!-- Navbar & Hero End -->


    <!-- Abvout Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">À propos de nous</h4>
                        <h1 class="display-5 mb-4">Découvrez notre entreprise</h1>
                        <p class="mb-4">BTP Consulting est un bureau d’études spécialisé dans le conseil et la gestion de projets BTP. Nous offrons des solutions sur mesure pour garantir la qualité, la sécurité et la rentabilité de vos projets.
                            Notre équipe d'experts vous accompagne à chaque étape de la conception à l'exécution de vos projets de construction et d'infrastructure.</p>

                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Business Consulting</h4>
                                        <p>Chez BTP Consulting, nous proposons des services de consulting spécialisés dans le secteur du BTP, en vous accompagnant dans la gestion, la planification et l’optimisation de vos projets pour maximiser la rentabilité et garantir leur succès.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                    <div class="ms-4">
                                        <h4>Années d'Expertise</h4>
                                        <p>Avec plusieurs années d'expérience dans le secteur du BTP, BTP Consulting met à votre disposition son savoir-faire pour garantir la réussite de vos projets, grâce à une expertise solide et une connaissance approfondie du domaine.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="service.html" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Découvrir Nos Services</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
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
    <!-- About End -->



    <!-- Offer Start -->
    <div class="container-fluid offer-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Notre Expertise</h4>
                <h1 class="display-6 mb-4">Les Services que Nous Offrons en Génie Civil</h1>
                <p class="mb-0">Chez BTP Consulting, nous nous spécialisons dans la fourniture de solutions complètes et personnalisées en génie civil. Notre expertise couvre une gamme variée de services, garantissant la réussite de vos projets selon les standards les plus rigoureux en matière de qualité, sécurité et efficacité.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="nav nav-pills bg-light rounded p-5">
                        <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                            <h5 class="mb-0">Conception et Planification de Projets</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                            <h5 class="mb-0">Gestion de la Construction</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                            <h5 class="mb-0">Services en Génie Structurel</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                            <h5 class="mb-0">Durabilité et Impact Environnemental</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ asset('asset/img/a1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-6">Solutions de Conception Innovantes</h1>
                                    <p class="mb-4">Nous fournissons des services de conception sur mesure, assurant que chaque projet soit soigneusement planifié pour répondre aux exigences techniques et esthétiques...</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="{{ asset('asset/img/a2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-6">Gestion de Projet et Exécution Efficace</h1>
                                    <p class="mb-4">Notre équipe expérimentée veille à ce que votre projet se déroule sans encombre, respectant les délais, les budgets et les normes de sécurité. Nous gérons l'ensemble...
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="img/a3.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-6 ">Intégrité et Conception Structurale</h1>
                                    <p class="mb-4">Nous offrons des services de génie structurel robustes, garantissant la sécurité, la stabilité et la durabilité de chaque projet de bâtiment ou d'infrastructure...
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-7">
                                    <img src="img/a4.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="col-md-5">
                                    <h1 class="display-5 mb-6">Pratiques de Génie Durables</h1>
                                    <p class="mb-4">Nous mettons l'accent sur l'intégration de pratiques durables à toutes les étapes de nos projets. De la planification à la construction...
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->




    <!-- FAQs Start -->
    <div class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">FAQs</h4>
                <h1 class="display-5 mb-4">Questions fréquemment posées</h1>
                <!-- <p class="mb-0">Dans cette section, vous trouverez des réponses aux questions les plus courantes concernant le génie civil, allant de la gestion de projet à l'utilisation des matériaux, en passant par la sécurité et la durabilité.
                </p> -->
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Quel est le rôle d'un ingénieur civil dans les projets de construction ?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body"> Les ingénieurs civils jouent un rôle crucial dans la planification, la conception et la gestion des projets de construction. Ils veillent à la sécurité, à la fonctionnalité et à la durabilité des infrastructures telles que les bâtiments, les ponts, les routes et les systèmes d'eau.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Quels sont les principaux matériaux de construction utilisés en génie civil ?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">Les matériaux de construction courants en génie civil incluent le béton, l'acier, le bois, les briques et les composites. Chaque matériau a des utilisations spécifiques, des avantages et des limitations en fonction des besoins du projet.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Quelles sont les étapes clés dans un projet de génie civil ?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body"> Les étapes clés d'un projet de génie civil comprennent la planification et la conception, l'obtention des permis, la préparation du site, la construction et l'inspection finale. Chaque étape nécessite une planification minutieuse pour garantir la réussite du projet.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Qu'est-ce que l'analyse structurelle en génie civil ?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">L'analyse structurelle consiste à calculer la résistance, la stabilité et la sécurité des structures telles que les bâtiments, les ponts et les tours. Les ingénieurs utilisent diverses méthodes pour s'assurer que les structures peuvent supporter des forces externes telles que le vent, les tremblements de terre et les charges de poids.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    Quel rôle joue l'impact environnemental dans les projets de génie civil ?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">  L'impact environnemental est une considération cruciale en génie civil. Les ingénieurs doivent évaluer les effets potentiels de la construction sur les écosystèmes, les systèmes d'eau, la qualité de l'air et les communautés locales afin de minimiser les dommages et garantir la durabilité du projet.</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    Quels sont les différents types de fondations utilisées en génie civil ?
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body"> En génie civil, les fondations sont classées en fondations superficielles (comme les fondations en dalle, en bandes ou isolées) et en fondations profondes (telles que les pieux et les caissons). Le choix de la fondation dépend des conditions du sol, de la capacité portante et des spécifications du projet.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded">
                        <img src="{{ asset('asset/img/Q1.jpg') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


@endsection
