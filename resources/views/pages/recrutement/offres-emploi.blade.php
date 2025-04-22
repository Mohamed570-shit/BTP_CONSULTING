@extends('layouts.app')

@section('title', 'Offres d\'Emploi')

@section('content')
    <!-- Header Section -->
    <section class="bg-breadcrumb">
        <div class="container text-center py-5">
            <h1 class="display-4 mb-4 text-accent wow fadeInDown" data-wow-delay="0.1s">Offres d’Emploi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('contact') }}">Contact</a></li>
                    <li class="breadcrumb-item active text-accent" aria-current="page">Offres d’Emploi</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Offres d'Emploi Section -->
    <section class="container-fluid py-5 offres-container">
        <div class="container py-5">
            <header class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="text-accent mb-2">Offres d’Emploi</h2>
                <h1 class="display-5 mb-4">
                    <i class="fas fa-briefcase text-accent me-2"></i> Rejoignez Notre Équipe
                </h1>
                <p class="text-muted mb-0 lead">
                    Explorez nos opportunités de carrière et postulez pour rejoindre BTP Consulting.
                </p>
            </header>

            <!-- Session Messages -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Offres List -->
            <div class="row g-4">
                @if ($offres->isEmpty())
                    <div class="col-12 text-center">
                        <p class="text-muted lead">Aucune offre d'emploi disponible pour le moment.</p>
                    </div>
                @else
                    @foreach ($offres as $offre)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <article class="card h-100 offre-card">
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title h5">{{ $offre->titre }}</h3>
                                    <div class="card-text flex-grow-1 text-muted">
                                        <p><strong>Description :</strong> {{ \Illuminate\Support\Str::limit($offre->description, 100) }}</p>
                                        <p><strong>Lieu :</strong> {{ $offre->location ?? 'Non spécifié' }}</p>
                                        <p><strong>Type :</strong> {{ $offre->type ?? 'Non spécifié' }}</p>
                                        <p><strong>Date limite :</strong> {{ $offre->date_expiration ? $offre->date_expiration->format('d/m/Y') : 'Pas de limite' }}</p>
                                    </div>
                                    <button type="button" class="btn btn-outline-accent mt-auto" data-bs-toggle="modal" data-bs-target="#applyModal{{ $offre->id }}">
                                        Postuler
                                    </button>
                                </div>
                            </article>
                        </div>

                        <!-- Application Modal -->
                        <div class="modal fade" id="applyModal{{ $offre->id }}" tabindex="-1" aria-labelledby="applyModalLabel{{ $offre->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content modal-professional">
                                    <div class="modal-header">
                                        <h3 class="modal-title text-accent" id="applyModalLabel{{ $offre->id }}">Postuler pour {{ $offre->titre }}</h3>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('offres.apply', $offre->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name{{ $offre->id }}" class="form-label">Nom complet</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name{{ $offre->id }}" name="name" value="{{ old('name') }}" required>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email{{ $offre->id }}" class="form-label">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email{{ $offre->id }}" name="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="cv{{ $offre->id }}" class="form-label">Télécharger votre CV (PDF)</label>
                                                <input type="file" class="form-control @error('cv') is-invalid @enderror" id="cv{{ $offre->id }}" name="cv" accept=".pdf" required>
                                                @error('cv')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="message{{ $offre->id }}" class="form-label">Message (optionnel)</label>
                                                <textarea class="form-control @error('message') is-invalid @enderror" id="message{{ $offre->id }}" name="message" rows="4">{{ old('message') }}</textarea>
                                                @error('message')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-accent w-100">Envoyer la candidature</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Root Variables (Consistent with layouts.app) */
        :root {
            --primary: #ff6f00;
            --secondary: #007bff;
            --dark: #333;
            --light: #f8f9fa;
            --white: #fff;
            --accent: var(--primary);
        }

        /* Breadcrumb Section */
        .bg-breadcrumb {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: var(--white);
            padding: 60px 0;
        }

        .bg-breadcrumb h1 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--white);
        }

        .breadcrumb-item a {
            color: var(--white);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: var(--light);
        }

        .breadcrumb-item.active {
            color: var(--white);
            font-weight: 600;
        }

        /* Offres Container */
        .offres-container {
            background-color: var(--light);
            padding: 60px 0;
        }

        .offres-container header h2 {
            color: var(--accent);
            font-size: 1.5rem;
            font-weight: 600;
        }

        .offres-container header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark);
        }

        .offres-container header p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Offre Card */
        .offre-card {
            border: none;
            border-radius: 12px;
            background: var(--white);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .offre-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .offre-card .card-title {
            color: var(--dark);
            font-size: 1.25rem;
            font-weight: 600;
        }

        .offre-card .card-text p {
            margin: 0.5rem 0;
            font-size: 0.95rem;
        }

        .offre-card .btn-outline-accent {
            border-color: var(--accent);
            color: var(--accent);
            border-radius: 8px;
            padding: 10px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .offre-card .btn-outline-accent:hover {
            background-color: var(--accent);
            color: var(--white);
        }

        /* Modal */
        .modal-professional {
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: none;
        }

        .modal-professional .modal-header {
            border-bottom: none;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: var(--white);
        }

        .modal-professional .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .modal-professional .btn-close-white {
            filter: invert(1);
        }

        .modal-professional .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
            transition: border-color 0.3s ease;
        }

        .modal-professional .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 0.2rem rgba(var(--accent), 0.25);
        }

        .modal-professional .btn-accent {
            background-color: var(--accent);
            border-color: var(--accent);
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .modal-professional .btn-accent:hover {
            background-color: darken(var(--accent), 10%);
            border-color: darken(var(--accent), 10%);
        }

        /* Alerts */
        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .bg-breadcrumb h1 {
                font-size: 2rem;
            }

            .offres-container header h1 {
                font-size: 2rem;
            }

            .offre-card {
                margin-bottom: 20px;
            }
        }
    </style>
@endpush
