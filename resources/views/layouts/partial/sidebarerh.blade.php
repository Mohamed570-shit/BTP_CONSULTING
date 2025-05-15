<aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('asset/img/logo-2.png') }}" alt="BTP Consulting" class="img-fluid">
            </div>
            <ul class="sidebar-menu">
            <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a></li>
                <li><a href="{{ route('admin.jobs') }}" class="{{ request()->routeIs('admin.jobs*') ? 'active' : '' }}"><i class="fas fa-briefcase"></i> Offres d'emploi</a></li>
                <li><a href="{{ route('admin.spontaneous-applications') }}" class="{{ request()->routeIs('admin.spontaneous-applications*') ? 'active' : '' }}"><i class="fas fa-file-upload"></i> Candidatures Spontanées</a></li>      
                <li><a href="{{ route('admin.a_la_une_admin') }}" class="{{ request()->routeIs('admin.a_la_une_admin') ? 'active' : '' }}"><i class="fas fa-star"></i> A la une</a></li>
            </ul>
</aside>