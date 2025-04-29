@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tableau de bord RH') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Offres d'emploi</h5>
                                    <p class="display-4">{{ $totalJobs }}</p>
                                    <a href="{{ route('rh.jobs') }}" class="btn btn-primary">Gérer les offres</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Candidatures spontanées</h5>
                                    <p class="display-4">{{ $totalApplications }}</p>
                                    <a href="{{ route('rh.applications') }}" class="btn btn-primary">Voir les candidatures</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
