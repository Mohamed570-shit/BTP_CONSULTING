<header class="navbar-admin">
    <button class="toggle-sidebar" id="toggle-sidebar"><i class="fas fa-bars"></i></button>
    <h4 class="mb-0">@yield('title')</h4>
    <div class="d-flex align-items-center">
        <!-- User Name -->
        <span class="me-2">{{ Auth::user()->name }}</span>
        <!-- Profile Icon -->
        <div class="me-3">
            <a href="{{ route('admin.profile') }}" class="profile-icon" title="Profil">
                <i class="fas fa-user"></i>
            </a>
        </div>
        <!-- Notifications -->
        <div class="notification-area me-3">
            <a href="{{ route('admin.notifications') }}" class="notification-bell">
                <i class="fas fa-bell"></i>              
                <span class="notification-count">{{ Auth::user()->unreadNotifications->count() }}</span>        </div>
                        <!-- Logout -->
                        <div class="me-3">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </div>
                    </div>
                </header>