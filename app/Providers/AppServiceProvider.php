<?php

namespace App\Providers;

use App\Models\Domaine;
use App\Models\Departement;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('domaines', Domaine::all());
        });
        View::composer('*', function ($view) {
            $view->with('departements', Departement::all());
        });
    }
}
