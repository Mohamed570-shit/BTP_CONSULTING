@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">NOUS REJOINDRE</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Contact</a></li>
                    <li class="breadcrumb-item active text-primary">Nous Rejoindre</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Nous Rejoindre</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-envelope text-primary me-2"></i> Contactez-nous
                </h1>
                <p class="mb-0">
                    Vous avez une question ou souhaitez rejoindre notre équipe ? Remplissez le formulaire ci-dessous ou contactez-nous directement.
                </p>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="mb-4">Envoyez-nous un message</h2>
                    <form>
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Votre Nom" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control" placeholder="Votre Email" required>
                        </div>
                        <div class="mb-4">
                            <select class="form-control" required>
                                <option value="" disabled selected>Sélectionner un sujet</option>
                                <option value="option1">demande de consultation</option>
                                <option value="option2">demande de devis</option>
                                <option value="option3">demande de réclamation</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <textarea class="form-control" rows="5" placeholder="Votre Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="mb-4">Nos Coordonnées</h2>
                
                    <p>
                        <i class="fas fa-map-marker-alt text-primary me-2"></i> 
                        AV. Ali Yarta, Wilaya Centaer, 3<sup>ème</sup> Etage, N° 029, Tetouan.
                    </p>
                
                    <p>
                        <i class="fas fa-phone-alt text-primary me-2"></i> 
                        +212 07 08 08 08 07
                    </p>
                
                    <p>
                        <i class="fas fa-phone-alt text-primary me-2"></i> 
                        Fixe: +05 39 71 38 10
                    </p>
                    
                
                    <p>
                        <i class="fas fa-envelope text-primary me-2"></i> 
                        contact@btpconsulting.gmail
                    </p>
                
                    <div class="mt-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.57018!2d-5.374267!3d35.57018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDM0JzEyLjciTiA1wrAyMic0NC4wIlc!5e0!3m2!1sfr!2sma!4v1630000000000"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @endSection