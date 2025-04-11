@extends('layouts.admin')

@section('title', 'Tableau de Bord')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success">
                <h4><i class="fas fa-tachometer-alt"></i> Bienvenue dans votre tableau de bord administrateur</h4>
                <p>Utilisez le menu de gauche pour naviguer entre les différentes sections.</p>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Utilisateurs</h5>
                    <p class="card-text">Gérez les utilisateurs du système</p>
                    <a href="{{ route('admin.users') }}" class="btn btn-sm btn-primary">Accéder</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="fas fa-project-diagram fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Projets</h5>
                    <p class="card-text">Gérez les projets de l'entreprise</p>
                    <a href="{{ route('admin.projects') }}" class="btn btn-sm btn-primary">Accéder</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="fas fa-briefcase fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Offres d'emploi</h5>
                    <p class="card-text">Gérez les offres d'emploi</p>
                    <a href="{{ route('admin.jobs') }}" class="btn btn-sm btn-primary">Accéder</a>
                </div>
            </div>
        </div>

        <!-- Ajout de la section Notifications -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="fas fa-bell fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Notifications</h5>
                    <p class="card-text">Consultez et gérez les notifications</p>
                    <a href="{{ route('admin.notifications') }}" class="btn btn-sm btn-primary">Accéder</a>
                </div>
            </div>
        </div>

        <!-- Ajout de la section Candidatures Spontanées -->
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="fas fa-file-upload fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Candidatures Spontanées</h5>
                    <p class="card-text">Gérez les candidatures spontanées</p>
                    <a href="{{ route('admin.spontaneous-applications') }}" class="btn btn-sm btn-primary">Accéder</a>
                </div>
            </div>
        </div>
    </div>
@endsection
