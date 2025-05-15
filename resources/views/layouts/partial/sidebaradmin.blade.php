<aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('asset/img/logo-2.png') }}" alt="BTP Consulting" class="img-fluid">
            </div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a></li>
                <li><a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}"><i class="fas fa-users"></i> Utilisateurs</a></li>
                <li><a href="{{ route('admin.about') }}" class="{{ request()->routeIs('admin.about*') ? 'active' : '' }}"><i class="fas fa-info-circle"></i> Qui sommes-nous</a></li>
                <li><a href="{{ route('admin.domains') }}" class="{{ request()->routeIs('admin.domains*') ? 'active' : '' }}"><i class="fas fa-globe"></i> Nos domaines</a></li>
                <li><a href="{{ route('admin.projects') }}" class="{{ request()->routeIs('admin.projects*') ? 'active' : '' }}"><i class="fas fa-project-diagram"></i> Projets</a></li>
                <li><a href="{{ route('admin.departments') }}" class="{{ request()->routeIs('admin.departments*') ? 'active' : '' }}"><i class="fas fa-building"></i> Départements</a></li>
                <li><a href="{{ route('admin.jobs') }}" class="{{ request()->routeIs('admin.jobs*') ? 'active' : '' }}"><i class="fas fa-briefcase"></i> Offres d'emploi</a></li>
                <li><a href="{{ route('admin.spontaneous-applications') }}" class="{{ request()->routeIs('admin.spontaneous-applications*') ? 'active' : '' }}"><i class="fas fa-file-upload"></i> Candidatures Spontanées</a></li>      
                <li><a href="{{ route('admin.a_la_une_admin') }}" class="{{ request()->routeIs('admin.a_la_une_admin') ? 'active' : '' }}"><i class="fas fa-star"></i> A la une</a></li>
            </ul>
        </aside>