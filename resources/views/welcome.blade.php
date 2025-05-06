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
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
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
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location
                        </a>
                        <a href="tel:+0708080807" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>tel:+07 08 08 08 07</a>
                        <a href="tel:+05 39 71 38 10" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i> Fixe: +05 39 71 38 10</a>
                        <a href="contact@btpconsulting.gmail" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>contact@btpconsulting.gmail</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="register.html"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                        <a href="login.html"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                        <!-- <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="img/logo-2.png"   alt="Logo"  width="150px" height="">
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
                                <a href="a-propos.html" class="dropdown-item">
                                    <i class="fas fa-info-circle me-2"></i> À propos de BTP
                                </a>
                                <a href="mot-directeur.html" class="dropdown-item">
                                    <i class="fas fa-user-tie me-2"></i> Mot du Directeur Général
                                </a>
                                <a href="nos-valeurs.html" class="dropdown-item">
                                    <i class="fas fa-handshake me-2"></i> Nos valeurs
                                </a>
                                <a href="chiffres-cles.html" class="dropdown-item">
                                    <i class="fas fa-chart-line me-2"></i> Chiffres clés
                                </a>
                                <a href="certifications.html" class="dropdown-item">
                                    <i class="fas fa-certificate me-2"></i> Certifications ISO 9001 V2015 et Agrément
                                </a>
                                <a href="rayonnement.html" class="dropdown-item">
                                    <i class="fas fa-globe me-2"></i> Rayonnement
                                </a>
                                <a href="gouvernance.html" class="dropdown-item">
                                    <i class="fas fa-balance-scale me-2"></i> Gouvernance
                                </a>
                                <a href="management.html" class="dropdown-item">
                                    <i class="fas fa-users-cog me-2"></i> Management
                                </a>
                                <a href="organigramme.html" class="dropdown-item">
                                    <i class="fas fa-sitemap me-2"></i> Organigramme
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
                <a href="hydraulique-urbaine.html" class="dropdown-item">
                    <i class="fas fa-tint icon"></i> Hydraulique urbaine
                </a>
                <a href="ouvrages-art.html" class="dropdown-item">
                    <i class="fas fa-archway icon"></i> Ouvrages d’art
                </a>
                <a href="travaux-maritimes-fluviaux.html" class="dropdown-item">
                    <i class="fas fa-ship icon"></i> Travaux maritimes et fluviaux
                </a>
                <a href="etudes-agricoles.html" class="dropdown-item">
                    <i class="fas fa-seedling icon"></i> Etudes agricoles
                </a>
                <a href="etudes-generales.html" class="dropdown-item">
                    <i class="fas fa-book icon"></i> Etudes générales
                </a>
                <a href="courant-fort-faible.html" class="dropdown-item">
                    <i class="fas fa-plug icon"></i> Courant fort et courant faible
                </a>
                <a href="voirie-reseaux-assainissement.html" class="dropdown-item">
                    <i class="fas fa-road icon"></i> Voirie, réseaux d’assainissement et eau potable
                </a>
                <a href="etudes-impact-environnement.html" class="dropdown-item">
                    <i class="fas fa-leaf icon"></i> Etudes d’impact sur l’environnement
                </a>
            </div>

            <div class="dropdown-column">
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
            </div>

            <div>
                <h4 style="color: #333;">Prestations</h4>
                <p>BTP Consulting assure l’ensemble des processus des métiers de l’ingénierie, depuis les études de faisabilité jusqu’à l’assistance à la réalisation et à l’exploitation.</p>
                <img src="./img/carousel-3.jpg" alt=""  width="300px" height="200px">
            </div>
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
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <span class="dropdown-toggle">NOS RÉALISATIONS</span>
    </a>
    <div class="dropdown-menu custom-dropdown">
        <div class="dropdown-container">
            <!-- Colonne 1 : Politique Ressources Humaines -->
            <div class="dropdown-column">
                <h4 class="dropdown-title">Politique Ressources Humaines</h4>
                <p>La politique menée dans la gestion des ressources humaines veille à entretenir et à développer davantage la culture de...</p>
                <div class="dropdown-image">
                    <img src="./img/Humaines.jpg" alt="Politique Ressources Humaines">
                </div>
            </div>

            <!-- Colonne 2 : Projets Récents -->
            <div class="dropdown-column">
                <h4 class="dropdown-title">Projets récents</h4>
                <div class="dropdown-image">
                    <img src="./img/carousel-3.jpg" alt="Projets récents">
                </div>
            </div>
            <div class="dropdown-column">
                <h4 class="dropdown-title">CARTE de project</h4>
                <div class="dropdown-image">
                    <img src="./img/carousel-3.jpg" alt="Projets récents">
                </div>
            </div>


        </div>
    </div>
</div>

<!-- CSS -->
<style>
    /* Menu déroulant principal */
    .custom-dropdown {

        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
         /* Note : valeur incomplète dans le code original */
        padding: 10px;
        background-color: #fff;
    }

    /* Conteneur flex des colonnes */
    .dropdown-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    /* Colonnes individuelles */
    .dropdown-column {
        width: 1000%;
    }

    /* Style des titres */
    .dropdown-title {
        font-size: 18px;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 10px;
    }

    /* Style du texte */
    .dropdown-column p {
        font-size: 14px;
        color: #333;
        line-height: 1.5;
    }

    /* Style des images */
    .dropdown-image img {
        width: 200%;
        height: 200px;
        object-fit: cover;
        border-radius: 6px;
        transition: transform 0.3s ease-in-out;
    }

    .dropdown-image img:hover {
        transform: scale(1.05);
    }

    /* Style du lien de navigation */
    .nav-link {
        font-weight: bold;
        color: #333;
    }

    .nav-link:hover {
        color: #007bff;
    }
</style>

<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <span class="dropdown-toggle">
            <!-- <i class="fas fa-cogs me-2"></i> -->
            NOTRE MANAGEMENT
        </span>
    </a>
    <div class="dropdown-menu m-0">
        <a href="etudes-techniques.html" class="dropdown-item">
            <i class="fas fa-wrench me-2"></i> Département Études Techniques – BTP CONSULTING
        </a>
        <a href="assistance-technique.html" class="dropdown-item">
            <i class="fas fa-cogs me-2"></i> Département Suivi & Contrôle des Travaux
        </a>
        <a href="suivi-travaux.html" class="dropdown-item">
            <i class="fas fa-check-square me-2"></i> Département Qualité & Audit Technique
        </a>
        <a href="amenagement-rural.html" class="dropdown-item">
            <i class="fas fa-leaf me-2"></i> Département Innovation & Transition Digitale
        </a>
        <a href="infrastructures-urbain.html" class="dropdown-item">
            <i class="fas fa-building me-2"></i> Département Développement Commercial & Marketing
        </a>
        <a href="infrastructures-mobilite.html" class="dropdown-item">
            <i class="fas fa-users me-2"></i> Département Ressources Humaines & Gestion des Compétences
        </a>
        <a href="innovation-ia.html" class="dropdown-item">
            <i class="fas fa-calculator me-2"></i> Département Financier & Comptabilité
        </a>
        <a href="amenagement-rural.html" class="dropdown-item">
            <i class="fas fa-truck me-2"></i> Département Logistique & Moyens Généraux
        </a>
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


                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle"> NOS REALISATIONS</span>
                            </a>
                            <div class="dropdown-menu m-0">

                                <a href="realisations.html" class="dropdown-item">
                                    Nos réalisations (Projets récents, Études de cas, Témoignages clients)
                                </a>
                                <a href="carte-projets.html" class="dropdown-item">Carte des projets</a>
                            </div>
                        </div> -->


                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle"> NOS PUBLICATIONS</span>
                            </a>
                            <div class="dropdown-menu m-0">

                            </div>

<!-- HTML -->





                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle"> RECRUTEMENT</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="offres-emploi.html" class="dropdown-item">Offres d’emploi</a>
                                <a href="candidature-spontanee.html" class="dropdown-item">Candidature Spontanée</a>
                            </div>
                        </div>

                    </div>
                    <a href="contact.html" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">CONTACTER-NOUS</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <!-- Slide 1 -->
                <div class="header-carousel-item">
                    <img src="img/carousel-7.jpg" class="img-fluid w-100" alt="Image">
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
                    <img src="img/carousel-4.jpg" class="img-fluid w-100" alt="Image">
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
                    <img src="img/carousel-6.jpg" class="img-fluid w-100" alt="Image">
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
                    <img src="img/carousel-7.jpg" class="img-fluid w-100" alt="Image">
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
                            <img src="img/morad.png" class="img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->




        <!-- Services Start
    <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Nos Services</h4>
                    <h1 class="display-5 mb-4">Nous proposons les meilleurs services et offres du marché.</h1>
                    <p class="mb-0">Chez <strong>BTP Consulting</strong>, nous mettons à votre disposition une gamme complète de services, spécialement conçus pour répondre aux exigences du secteur du BTP. De l'étude initiale à la mise en œuvre, notre équipe vous accompagne à chaque étape pour garantir la réussite de vos projets.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-11.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Réalisation des études techniques tous corps d’état</a>
                                <p class="mb-4">Nous réalisons des études détaillées et complètes couvrant tous les corps de métiers du secteur du BTP...
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="etudes-techniques.html">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/Blog-10.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Assistance technique</a>
                                <p class="mb-4">Notre équipe vous accompagne tout au long du processus de conception et de réalisation de vos projets...
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="assistance-technique.html">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-14.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4"> Étude et suivi des travaux divers</a>
                                <p class="mb-4">Nous proposons des services d'étude et de suivi des travaux pour veiller à la bonne réalisation de vos projets...
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="suivi-travaux.html">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="img/service-16.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Réalisation des études d'impact environnemental</a>
                                <p class="mb-4">Nous effectuons des études d'impact environnemental approfondies pour évaluer les effets de vos projets ...
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="impact-environnemental.html">En savoir plus</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Features Start -->
        <!-- <div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Features</h4>
                    <h1 class="display-5 mb-4">Connecting businesses, ideas, and people for greater impact.</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-chart-line fa-4x text-primary"></i>
                            </div>
                            <h4>Global Management</h4>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-university fa-4x text-primary"></i>
                            </div>
                            <h4>Corporate Banking</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-file-alt fa-4x text-primary"></i>
                            </div>
                            <h4>Asset Management</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                            </div>
                            <h4>Investment Bank</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Features End -->


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
                                        <img src="img/a1.jpg" class="img-fluid w-100 rounded" alt="">
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
                                        <img src="img/a2.jpg" class="img-fluid w-100 rounded" alt="">
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

        <!-- Blog Start
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">

                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

                    <h2 class="display-6 mb-4  ">NOS DOMAINES D'ACTIVITÉS</h2>
                    <p class="mb-0">BTP Consulting intervient dans divers secteurs du BTP (Bâtiment et Travaux Publics), chacun de ces domaines nécessitant une expertise particulière. Découvrez les spécialités dans lesquelles nous excellerons pour mener à bien vos projets :
                    </p>
                </div>

                <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">

                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/Hydraulique_Urbaine.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="hydraulique-urbaine.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a class="h4 d-inline-block mb-3">Hydraulique Urbaine</a>
                        <p class="mb-4">Nous offrons des solutions complètes en hydraulique urbaine, incluant ...
                        </p>
                    </div>


                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/routes-autoroutes-transport.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="routes-autoroutes-transport.html" class="btn">Non-Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Routes, Autoroutes, Transport</a>
                        <p class="mb-4">Nous concevons et réalisons des projets d’infrastructures routières et...</p>
                    </div>


                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/ouvrages-art.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="#" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="ouvrages-art.html" class="h4 d-inline-block mb-3">Ouvrages d’Art</a>
                        <p class="mb-4"> Nous réalisons des ouvrages d’art de grande envergure, incluant ponts...   </p>
                    </div>


                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/barrages.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="barrages.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Barrages</a>
                        <p class="mb-4">Nous concevons et réalisons des barrages et réservoirs pour la gestion ... </p>
                    </div>


                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/travaux-maritimes-fluviaux.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="travaux-maritimes-fluviaux.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Travaux Maritimes et Fluviaux</a>
                        <p class="mb-4">Nous intervenons dans les projets d’infrastructures maritimes et fluviales...   </p>
                    </div>


                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/genie-defense.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="genie-defense.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Travaux du Génie de Défense</a>
                        <p class="mb-4">Nous proposons des solutions adaptées aux besoins spécifiques du génie de défense...</p>
                    </div>



                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/etudes-agricoles.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="etudes-agricoles.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Etudes Agricoles</a>
                        <p class="mb-4">Nous offrons des services d’étude pour l’agriculture, en optimisant l’utilisation...</p>
                    </div>

                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/Industrie et Énergie.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="industrie-energie.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Industrie et Énergie</a>
                        <p class="mb-4">Nous accompagnons le développement industriel et énergétique à travers des études...</p>
                    </div>



                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/etudes-generales-1.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="etudes-generales.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Études Générales</a>
                        <p class="mb-4">Nous réalisons des études techniques et stratégiques couvrant divers secteurs pour ...</p>
                    </div>


                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/calcul-structures-batiments.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="calcul-structures-batiments.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="calcul-structures-batiments.html" class="h4 d-inline-block mb-3">Calcul de Structures</a>
                        <p class="mb-4">Nous assurons la conception et le calcul des structures pour bâtiments, garantissant ...</p>
                    </div>


                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/courant-fort-faible.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="courant-fort-faible.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Courant Fort et Faible</a>
                        <p class="mb-4">Nous concevons et installons des réseaux électriques en courant fort et faible pour assurer l’efficacité  ...</p>
                    </div>



                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/reseaux-fluides-batiments.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="reseaux-fluides-batiments.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Réseaux de Fluides</a>
                        <p class="mb-4">Nous optimisons la gestion des réseaux de fluides pour les bâtiments, garantissant une distribution efficace ...</p>
                    </div>



                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/voirie-reseaux-assainissement.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="voirie-reseaux-assainissement.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Voirie et Réseaux d’Assainissement</a>
                        <p class="mb-4">Nous réalisons des études et travaux de voirie et réseaux d’assainissement pour assurer un cadre  ...</p>
                    </div>



                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/reseau-electricite-telephonique.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="reseau-electricite-telephonique.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Réseau Électrique et Téléphonique</a>
                        <p class="mb-4">Nous développons des infrastructures électriques et téléphoniques fiables, adaptées aux exigences ...</p>
                    </div>




                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/etudes-impact-environnement.jpeg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="etudes-impact-environnement.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Études d’Impact Environnemental</a>
                        <p class="mb-4">Nous menons des études d’impact environnemental pour assurer le respect des normes et minimiser ...</p>
                    </div>


                    <div class="blog-item p-4">
                        <div class="blog-img mb-4">
                            <img src="img/geologie-geophysique-hydrogie.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="blog-title">
                                <a href="geologie-geophysique-hydrogie.html" class="btn">Savoir plus</a>
                            </div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">Géologie et Hydrogéologie</a>
                        <p class="mb-4">Nous réalisons des études en géologie, géophysique et hydrogéologie pour garantir la stabilité ...</p>
                    </div>


                </div>
            </div>
        </div> -->
        <!-- Blog End -->


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
                            <img src="img/Q1.jpg" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->



        <!-- Testimonial Start -->
        <!-- <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-5 mb-4">Our Clients Riviews</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Person Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Person Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Person Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Person Name</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: #ff6f00;">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="index.html" class="p-0">
                                <h4 class="text-white">BTP Consulting</h4>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                            <p class="mb-4">BTP Consulting est une entreprise spécialisée dans le conseil et la gestion de projets dans le secteur du BTP. Nous offrons des services d’accompagnement, d’expertise et de gestion pour garantir la réussite de vos projets..</p>
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
                                <p class="text-white mb-0">(+212) 07 08 08 08 07</p>
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
                    <a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>BTP Consulting</a>, All rights reserved.
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>
