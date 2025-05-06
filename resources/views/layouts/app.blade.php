<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>BTP Consulting - Engineering & Construction Solutions</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{ asset('asset/lib/animate/animate.min.css') }}"/>
        <link href="{{ asset('asset/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
        @stack('styles')
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="https://www.bing.com/maps?where=Avenue+Ali+Yaeta+Center%2C+3%C3%A9me+%C3%89tage%2C+N%C2%B0+29.%2C+Tetouan%2C+Tetouan+91020%2C+MA&cp=35.57018%7E-5.374267&lvl=16.0#" target="_blank" class="text-muted small me-4">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>Trouver notre emplacement
                        </a>
                        <a href="tel:0708080807" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>Tel:07 08 08 08 07</a>
                        <a href="tel:05 39 71 38 10" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i> Fixe: 05 39 71 38 10</a>
                        <a href="mailto:contact@btpconsulting.gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>contact@btpconsulting.gmail.com</a>                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="{{ route('login') }}"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="{{ asset('asset/img/Logo Central BTP CONSULTING.png') }}"   alt="Logo"  width="150px" height="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <!-- <a href="index.html" class="nav-item nav-link active">QUI SOMMES-NOUS </a> -->
                        <div class="nav-item dropdown">
                            <a href="about.html" class="nav-link active" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle  active" > QUI SOMMES-NOUS</span>
                            </a>
                            <div class="dropdown-menu m-0 custom-dropdown">
                                <a href="{{ route('a-propos') }}" class="dropdown-item">
                                    <i class="fas fa-info-circle me-2"></i> À propos de BTP-CONSULTING
                                </a>
                                <a href="{{ route('mot-directeur') }}" class="dropdown-item">
                                    <i class="fas fa-user-tie me-2"></i> Mot du Directeur Général
                                </a>
                                <a href="{{ route('nos-valeurs') }}" class="dropdown-item">
                                    <i class="fas fa-handshake me-2"></i> Nos valeurs
                                </a>
                                <a href="{{ route('chiffres-cles') }}" class="dropdown-item">
                                    <i class="fas fa-chart-line me-2"></i> Chiffres clés
                                </a>
                                <a href="{{ route('certifications') }}" class="dropdown-item">

                                    <i class="fas fa-certificate me-2"></i> Certifications
                                </a>
                            </div>

                            <style>
                            .custom-dropdown .dropdown-item {
                                padding: 10px 20px;
                                color: rgb(11, 11, 11);
                                transition: all 0.3s ease;
                            }

                            .custom-dropdown .dropdown-item:hover {
                                background-color: #f8f9fa;
                                color: #007bff;
                                padding-left: 25px;
                            }

                            .custom-dropdown .dropdown-item i {
                                color: #ff6f00;
                                width: 20px;
                                text-align: center;
                            }

                            .custom-dropdown .dropdown-item:hover i {
                                color: #007bff;
                            }
                            </style>
                        </div>
                        <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                        <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->


<!-- HTML -->
<div class="nav-item dropdown">
    <a href="#" class="nav-link" data-bs-toggle="dropdown">
        <span class="dropdown-toggle">NOS DOMAINES DE COMPÉTENCE</span>
    </a>
    <div class="dropdown-menu custom-dropdown m-6 p-lg-10">
        <div class="dropdown-container">
            <div class="dropdown-column">
                <p style="color: #007bff;">Domaines de compétences</p>
                @foreach($domaines as $domaine)
                    <a href="{{ route('Front.domain.show', $domaine->id) }}" class="dropdown-item">
                        <i class="{{ $domaine->icon ?? 'fas fa-cube' }} icon"></i> {{ $domaine->title }}
                    </a>
                @endforeach
            </div>


            {{-- <div class="dropdown-column">
                <a href="routes-autoroutes-transport.html" class="dropdown-item">
                    <i class="fas fa-road icon"></i> Routes, autoroutes, transport
                </a>
                <a href="barrages.html" class="dropdown-item">
                    <i class="fas fa-water icon"></i> Barrages
                </a>
                <a href="barrages.html" class="dropdown-item">
                    <i class="fas fa-water icon"></i>  Ordonnancement, Pilotage et Coordination
                </a>

                <a href="genie-defense.html" class="dropdown-item">
                    <i class="fas fa-shield-alt icon"></i> Travaux du génie de défense
                </a>
                <a href="industrie-energie.html" class="dropdown-item">
                    <i class="fas fa-bolt icon"></i> Industrie et énergie
                </a>
                <a href="calcul-structures-batiments.html" class="dropdown-item">
                    <i class="fas fa-building icon"></i> Calcul de structures pour bâtiments
                </a>
                <a href="reseaux-fluides-batiments.html" class="dropdown-item">
                    <i class="fas fa-water icon"></i> Réseaux des fluides pour bâtiments
                </a>
                <a href="reseau-electricite-telephonique.html" class="dropdown-item">
                    <i class="fas fa-broadcast-tower icon"></i> Réseau d’électricité et téléphoniques
                </a>
                <a href="geologie-geophysique-hydrogie.html" class="dropdown-item">
                    <i class="fas fa-mountain icon"></i> Géologie, géophysique, hydrogéologie
                </a>
            </div> --}}

            {{-- <div>

            <div>

                <h4 style="color: #333;">Prestations</h4>
                <p>BTP Consulting assure l’ensemble des processus des métiers de l’ingénierie, depuis les études de faisabilité jusqu’à l’assistance à la réalisation et à l’exploitation.</p>
                <img src="{{ asset('asset/img/carousel-3.jpg') }}" alt=""  width="300px" height="200px">
            </div> --}}
        </div>
    </div>
</div>

<!-- CSS -->
<style>
    .custom-dropdown {
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        width: px; /* Note : valeur incomplète dans le code original */
        padding: 10px;
        background-color: #fff;
    }

    .dropdown-container {
        display: flex;
        gap: 20px;
    }

    .dropdown-column {
        display: flex;
        flex-direction: column;
        width: 50%;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        color: #333;
        font-size: 14px;
        transition: all 0.3s ease;
        border-radius: 5px;
        text-decoration: none;
    }

    .dropdown-item:hover {
        background-color: #fff3e6;
        color: #ff6f00;
        padding-left: 20px;
    }

    .icon {
        color: #ff6f00;
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }

    .dropdown-item:hover .icon {
        color: #ff6f00;
    }
</style>




<div class="nav-item dropdown">
    <a href="#" class="nav-link" data-bs-toggle="dropdown">
        <span class="dropdown-toggle">NOTRE MANAGEMENT</span>
    </a>
    <div class="dropdown-menu m-0">
        @foreach($departements as $departement)
            <a href="{{ route('front.departement.show', $departement->id) }}" class="dropdown-item">
                <i class="{{ $departement->icon ?? 'fas fa-building' }} me-2"></i>
                {{ $departement->title }}
            </a>
        @endforeach
    </div>
</div>

<style>/* Style pour le menu déroulant */
   /* Style pour le menu déroulant */
.nav-item.dropdown {
    position: relative;
}

/* Style pour le lien de menu avec icône */
.nav-item .nav-link {
    display: flex;
    align-items: center;
    padding: 0.5rem 1rem;
    font-size: 1.1rem;
    color: #ff6f00; /* Couleur #ff6f00 pour le texte */
}

/* Style pour le texte avec icône */
.nav-item .nav-link i {
    font-size: 1.2rem;
    color: #ff6f00; /* Couleur #ff6f00 pour l'icône */
}

/* Style pour les éléments du menu déroulant */
.dropdown-menu {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    min-width: 200px;
}

/* Style pour les éléments du menu */
.dropdown-item {
    padding: 10px 20px;
    font-size: 1rem;
    color: #555;
    display: flex;
    align-items: center;
}

/* Style pour l'élément survolé */
.dropdown-item:hover {
    background-color: #f1f1f1;
    color: #ff6f00; /* Couleur #ff6f00 au survol */
}

/* Espacement entre les icônes et les textes */
.dropdown-item i {
    margin-right: 10px;
    color: #ff6f00; /* Couleur #ff6f00 pour l'icône */
}

/* Style pour le lien sélectionné */
.nav-item .dropdown-toggle {
    color: #ff6f00; /* Couleur #ff6f00 pour le lien sélectionné */
    font-weight: bold;
}
    </style>


<!-- HTML -->
<div class="nav-item dropdown">
    <a href="#" class="nav-link" data-bs-toggle="dropdown">
        <span class="dropdown-toggle">NOS REALISATIONS</span>
    </a>
    <div class="dropdown-menu custom-dropdown">
        <a href="{{ route('politiques-humaines') }}" class="dropdown-item">
            <img src="{{ asset('asset/img/Humaines.jpg') }}" alt="Icone RH" class="dropdown-icon">
            Politique Ressources Humaines
        </a>
        <a href="{{ route('projets-recents') }}" class="dropdown-item">
            <img src="{{ asset('asset/img/projet.png') }}" alt="Icone Projets" class="dropdown-icon">
            Projets Récents
        </a>
        <a href="{{ route('tous-les-projets') }}" class="dropdown-item">
            <img src="{{ asset('asset/img/carte de projet.png') }}" alt="Icone Carte" class="dropdown-icon">
            Carte de Projet
        </a>
        <a href="{{ route('organigramme') }}" class="dropdown-item">
            <img src="{{ asset('asset/img/organigrame.jpg') }}" alt="Icone Carte" class="dropdown-icon"> Organigramme
        </a>
    </div>
</div>

<!-- CSS -->
<style>

    /* Style des icônes */
    .dropdown-icon {
        width: 100px; /* Taille augmentée de 20px à 30px */
        height: 70px; /* Taille augmentée de 20px à 30px */
        margin-right: 12px; /* Espacement légèrement augmenté pour équilibrer */
        vertical-align: middle;
    }

</style>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link " data-bs-toggle="dropdown">
                                <span class="dropdown-toggle"> RECRUTEMENT</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('offres-emploi') }}" class="dropdown-item"><img src="{{ asset('asset/img/ofrre.jpg') }}" alt="Icone Carte" class="dropdown-icon">Offres d’emploi</a>
                                <a href="{{ route('candidature-spontanee') }}" class="dropdown-item"><img src="{{ asset('asset/img/org.jpg') }}" alt="Icone Carte" class="dropdown-icon">Candidature Spontanée</a>
                            </div>
                        </div>

                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">CONTACTER-NOUS</a>
                </div>
            </nav>


    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
     <!-- Footer Start -->
     <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: #ff6f00;">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <h4 class="text-white">BTP-CONSULTING</h4>
                            <!-- <img src="img/logo.png" alt="Logo"> -->
                        </a>
                        <p class="mb-4">BTP-CONSULTING est une entreprise spécialisée dans le conseil et la gestion de projets dans le secteur du BTP. Nous offrons des services d’accompagnement, d’expertise et de gestion pour garantir la réussite de vos projets..</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Home</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> About</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Nos Metieres</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> BTPAction</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Organisation/a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> International</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Recrutement</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Support</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Politique de confidentialité</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Termes et conditions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Avertissement</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Support technique</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Foire aux questions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Centre d'aide</a>
                        <!-- Ajoute d'autres liens ici si nécessaire -->
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contactez-nous</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Suivi de commande</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">Maroc Tanger-Tétouan-AlHoceïma </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">contact@btpconsulting.gmail</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0"> 07 08 08 08 07</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fab fa-firefox-browser text-primary me-3"></i>
                            <p class="text-white mb-0">Yoursite@ex.com</p>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
<div class="container">
    <div class="row g-4 align-items-center">
        <div class="col-md-6 text-center text-md-start mb-md-0">
            <span class="text-body">
                <a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>BTP-CONSULTING</a>, All rights reserved.
            </span>
        </div>
        <div class="col-md-6 text-center text-md-end text-body">
            <span class="text-body">Contact us at: <a href="mailto:contact@btpconsulting@gmail.com" class="border-bottom text-white">contact@btpconsulting@gmail.com</a></span>
        </div>
    </div>
</div>
</div>


    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ asset('asset/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('asset/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <!-- axios  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>


