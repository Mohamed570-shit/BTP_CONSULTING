<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - BTP Consulting Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/lib/animate/animate.min.css') }}"/>
    <link href="{{ asset('asset/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    <style>
        :root {
            --primary-color: #FF6F0F; /* Orange */
            --secondary-color: #0E2E50; /* Bleu */
        }
        
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }
        
        .admin-container {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: var(--secondary-color);
            color: white;
            position: fixed;
            height: 100vh;
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .sidebar-header {
            padding: 20px 15px;
            background-color: rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .sidebar-header img {
            max-width: 150px;
        }
        
        .sidebar-menu {
            padding: 0;
            list-style: none;
            margin-top: 20px;
        }
        
        .sidebar-menu li {
            margin-bottom: 5px;
        }
        
        .sidebar-menu li a {
            padding: 12px 20px;
            display: block;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
            font-size: 15px;
        }
        
        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background-color: var(--primary-color);
            color: white;
            border-left: 4px solid white;
        }
        
        .sidebar-menu li a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        /* Main content styles */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }
        
        .navbar-admin {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        
        /* Responsive styles */
        @media (max-width: 991.98px) {
            .sidebar {
                margin-left: -250px;
            }
            
            .sidebar.active {
                margin-left: 0;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .main-content.active {
                margin-left: 250px;
            }
            
            .toggle-sidebar {
                display: block !important;
            }
        }
        
        @media (max-width: 767.98px) {
            .main-content.active {
                margin-left: 0;
                position: relative;
            }
            
            .sidebar.active {
                width: 100%;
                z-index: 1050;
            }
        }
        
        .toggle-sidebar {
            display: none;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }
        
        /* Footer styles */
        .admin-footer {
            background-color: white;
            padding: 15px 20px;
            text-align: center;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('asset/img/logo-2.png') }}" alt="BTP Consulting" class="img-fluid">
            </div>
            
            <ul class="sidebar-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt"></i> Tableau de bord
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                        <i class="fas fa-users"></i> Utilisateurs
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about') }}" class="{{ request()->routeIs('admin.about*') ? 'active' : '' }}">
                        <i class="fas fa-info-circle"></i> Qui sommes-nous
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.domains') }}" class="{{ request()->routeIs('admin.domains*') ? 'active' : '' }}">
                        <i class="fas fa-globe"></i> Nos domaines
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.projects') }}" class="{{ request()->routeIs('admin.projects*') ? 'active' : '' }}">
                        <i class="fas fa-project-diagram"></i> Projets
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.departments') }}" class="{{ request()->routeIs('admin.departments*') ? 'active' : '' }}">
                        <i class="fas fa-building"></i> Départements
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.jobs') }}" class="{{ request()->routeIs('admin.jobs*') ? 'active' : '' }}">
                        <i class="fas fa-briefcase"></i> Offres d'emploi
                    </a>
                </li>
                <li class="mt-5">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Déconnecter
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="main-content" id="main-content">
            <div class="navbar-admin d-flex justify-content-between align-items-center">
                <button class="toggle-sidebar" id="toggle-sidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <h4 class="mb-0">@yield('title')</h4>
                <div>
                    <span class="me-2">{{ Auth::user()->name }}</span>
                    <img src="{{ asset('asset/img/user.jpg') }}" alt="User" class="rounded-circle" width="40">
                </div>
            </div>
            
            <div class="content-wrapper">
                @yield('content')
            </div>
            
            <div class="admin-footer">
                <p class="mb-0">&copy; {{ date('Y') }} BTP Consulting. Tous droits réservés.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            // Toggle sidebar
            $('#toggle-sidebar').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#main-content').toggleClass('active');
            });
            
            // Close sidebar when clicking outside on mobile
            $(document).on('click', function(e) {
                if ($(window).width() < 992) {
                    if (!$(e.target).closest('#sidebar').length && !$(e.target).closest('#toggle-sidebar').length) {
                        $('#sidebar').removeClass('active');
                        $('#main-content').removeClass('active');
                    }
                }
            });
        });
    </script>
</body>
</html>