@extends('layouts.app')

@section('title', 'Organigramme')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Organigramme</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Publications</a></li>
                <li class="breadcrumb-item active text-primary">Organigramme</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Organigramme Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Organigramme</h4>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-sitemap text-primary me-2"></i> Structure Organisationnelle
                </h1>
                <p class="mb-0">
                    Visualisez la structure organisationnelle de <strong>BTP Consulting</strong> pour une meilleure compréhension de notre fonctionnement et de notre gouvernance.
                </p>
            </div>

            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">

<div class="organigramme-container">
    @if($organigramme && $organigramme->image)
        <img src="{{ url('qui-sommes-nous/organigramme-image/' . $organigramme->image) }}" class="img-fluid rounded shadow-sm" alt="Organigramme BTP Consulting">
    @else
        <img src="https://via.placeholder.com/800x400?text=Organigramme+Non+Disponible" class="img-fluid rounded shadow-sm" alt="Organigramme Non Disponible">
    @endif
</div>

                    <p class="mt-4 text-center text-muted">
                        *Cet organigramme est un exemple fictif. Pour plus de détails, <a href="{{ url('/contact') }}" class="text-primary">contactez-nous</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Organigramme End -->

    <style>
        .bg-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/17/78/cb/1778cb68fa0ebfc4bcb81794d1495f0b.jpg');
            background-size: cover;
            background-position: center;
            min-height: 300px;
            display: flex;
            align-items: center;
        }
        .organigramme-container {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .organigramme-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .organigramme-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
        }
        p {
            font-size: 1.1rem;
            color: #6c757d;
            line-height: 1.6;
        }
        .text-primary {
            color: #ff6200 !important;
        }
        @media (max-width: 992px) {
            .bg-breadcrumb { min-height: 250px; }
            h2 { font-size: 2rem; }
            .organigramme-container { padding: 15px; }
        }
        @media (max-width: 576px) {
            .bg-breadcrumb { min-height: 200px; }
            h2 { font-size: 1.8rem; }
            p { font-size: 1rem; }
            .organigramme-container { padding: 10px; }
        }
    </style>
@endsection
