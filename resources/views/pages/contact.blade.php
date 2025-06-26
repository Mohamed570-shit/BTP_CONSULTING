@extends('layouts.app')

@section('title', 'Nous Rejoindre')

@section('content')
    <!-- Inclure Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Nous Rejoindre</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/contact') }}">Contact</a></li>
                <li class="breadcrumb-item active text-orange">Nous Rejoindre</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-orange">Nous Rejoindre</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-envelope text-orange me-2"></i> Contactez-nous
                </h1>
                <p class="mb-0">
                    Vous souhaitez rejoindre notre équipe ou poser une question ? Remplissez le formulaire ci-dessous ou contactez-nous directement.
                </p>
            </div>

            <div class="row g-5">
                <!-- Formulaire -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="mb-4">Envoyez-nous un message</h2>
                    <form action="{{ url('/contact/submit') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input type="text" name="name" class="form-control rounded" placeholder="Votre Nom" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control rounded" placeholder="Votre Email" required>
                        </div>
                      <div class="mb-4">
    <select name="subject" class="form-control rounded" required>
        <option value="" disabled selected>Sélectionner un sujet</option>
        <option value="consultation">Demande de consultation</option>
        <option value="devis">Demande de devis</option>
        <option value="reclamation">Demande de réclamation</option>
        <option value="join">Rejoindre notre équipe</option>
    </select>
</div>



<!-- Nouveau champ : Demande vient d'une entreprise ? -->
<div class="mb-4">
    <label for="from_company" class="form-label">
        Cette demande provient-elle d'une entreprise ?
    </label>
    <select name="from_company" id="from_company" class="form-control rounded" required>
        <option value="" disabled selected>Choisissez une option</option>
        <option value="oui">Oui</option>
        <option value="non">Non</option>
    </select>
</div>

<!-- Nom de l'entreprise, affiché seulement si "Oui" est sélectionné -->
<div class="mb-4 d-none" id="company_name_container">
    <input type="text" name="company_name" class="form-control rounded" placeholder="Nom de l'entreprise">
</div>

                        <div class="mb-4">
                            <textarea name="message" class="form-control rounded" rows="5" placeholder="Votre Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-orange rounded-pill py-2 px-4">Envoyer</button>
                    </form>
                </div>

                <!-- Coordonnées -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="mb-4">Nos Coordonnées</h2>
                    <div class="contact-info">
                        <p class="mb-3">
                            <i class="fas fa-map-marker-alt text-orange me-2"></i>
                            AV. Ali Yarta, Wilaya Centaer, 3<sup>ème</sup> Étage, N° 029, Tétouan
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-phone-alt text-orange me-2"></i>
                            <a href="tel:+212708080807">+212 708 080 807</a>
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-phone-alt text-orange me-2"></i>
                            <a href="tel:+212539713810">Fixe: +212 539 713 810</a>
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-envelope text-orange me-2"></i>
                            <a href="mailto:contact@btpconsulting.ma">contact@btpconsulting.ma</a>
                        </p>
                    </div>
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.570181170989!2d-5.374267084672109!3d35.57018098022348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDM0JzEyLjciTiA1wrAyMic0NC4wIlc!5e0!3m2!1sfr!2sma!4v1694700000000"
                            width="100%"
                            height="300"
                            style="border:0; border-radius: 10px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Styles CSS Internes -->
    <style>
        /* Background Header */
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('asset/img/contact.jpg')}}');

            /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=2070&auto=format&fit=crop'); */
            background-size: cover;
            background-position: center;
            min-height: 300px;
            display: flex;
            align-items: center;
        }

        /* Orange Color */
        .text-orange {
            color: #ff6200 !important;
        }

        .btn-orange {
            background-color: #ff6200;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-orange:hover {
            background-color: #e95b00;
        }

        /* Form and Contact Info */
        .contact-info p {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.6;
        }

        .form-control {
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #ff6200;
            box-shadow: 0 0 5px rgba(255, 98, 0, 0.3);
        }

        /* Text Styles */
        h2 {
            font-size: 2rem;
            font-weight: 600;
            color: #333;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .bg-breadcrumb {
                min-height: 250px;
            }

            h2 {
                font-size: 1.8rem;
            }

            .contact-info p {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .bg-breadcrumb {
                min-height: 200px;
            }

            h2 {
                font-size: 1.5rem;
            }

            .contact-info p {
                font-size: 0.9rem;
            }

            .form-control {
                font-size: 0.9rem;
            }
        }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const companySelect = document.getElementById('from_company');
        const companyInputContainer = document.getElementById('company_name_container');

        companySelect.addEventListener('change', function () {
            if (companySelect.value === 'oui') {
                companyInputContainer.classList.remove('d-none');
            } else {
                companyInputContainer.classList.add('d-none');
            }
        });
    });
</script>

@endsection
