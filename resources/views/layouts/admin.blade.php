<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>@yield('title') - BTP Consulting Admin</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External Libraries CSS -->
    <link rel="stylesheet" href="{{ asset('asset/lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/lib/lightbox/css/lightbox.min.css') }}">

    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <style>
        :root {
            --primary-color: #FF6F0F;
            --secondary-color: #FFFFFF;
            --text-color: #333333;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
            margin: 0;
        }
        .admin-container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: var(--secondary-color);
            color: var(--text-color);
            position: fixed;
            height: 100vh;
            transition: margin-left 0.3s ease;
            z-index: 1000;
            box-shadow: 2px 0 5px var(--shadow-color);
        }
        .sidebar-header {
            padding: 20px 15px;
            background-color: rgba(0, 0, 0, 0.05);
            text-align: center;
        }
        .sidebar-header img {
            max-width: 150px;
            height: auto;
        }
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 20px 0 0;
        }
        .sidebar-menu li {
            margin-bottom: 5px;
        }
        .sidebar-menu a {
            display: block;
            padding: 12px 20px;
            color: var(--text-color);
            text-decoration: none;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            border-left: 4px solid var(--text-color);
        }
        .sidebar-menu i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }
        .navbar-admin {
            background-color: var(--secondary-color);
            box-shadow: 0 2px 5px var(--shadow-color);
            padding: 15px 20px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .notification-area {
            position: relative;
        }
        .notification-bell {
            font-size: 20px;
            color: var(--primary-color);
            cursor: pointer;
        }
        .notification-count {
            position: absolute;
            top: -5px;
            right: -10px;
            background-color: var(--primary-color);
            color: var(--secondary-color);
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
        .navbar-admin .logout-icon,
        .navbar-admin .profile-icon {
            font-size: 20px;
            color: var(--primary-color);
            cursor: pointer;
            text-decoration: none;
            margin-left: 15px;
        }
        .admin-footer {
            background-color: var(--secondary-color);
            padding: 15px 20px;
            text-align: center;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 -2px 5px var(--shadow-color);
        }
        .toggle-sidebar {
            display: none;
            background-color: var(--primary-color);
            color: var(--secondary-color);
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }
        
        .main-content.w-100 {
            margin-left: 0 !important;
            width: 100% !important;
        }

        @media (max-width: 991.98px) {
            .sidebar { margin-left: -250px; }
            .sidebar.active { margin-left: 0; }
            .main-content { margin-left: 0; }
            .main-content.active { margin-left: 250px; }
            .toggle-sidebar { display: block; }
        }
        @media (max-width: 767.98px) {
            .sidebar.active { width: 100%; }
            .main-content.active { margin-left: 0; }
        }
    </style>
     @stack('styles')
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
         @if(Auth()->user()->role == 'admin')
            @include('layouts.partial.sidebaradmin')
        @endif
        @if(Auth()->user()->role == 'rh')
            @include('layouts.partial.sidebarerh')
        @endif
       

        <!-- Main Content -->
        <main class="main-content{{ Auth()->user()->role == 'assistant' ? ' w-100 no-sidebar' : '' }}" id="main-content">
         
            <!-- header -->
        @if(Auth()->user()->role == 'admin' || Auth()->user()->role == 'rh')
            @include('layouts.partial.headerRHadmin')
        @endif
        @if(Auth()->user()->role == 'assistant')
            @include('layouts.partial.headerassist')
        @endif
            <section class="content-wrapper">
                @yield('content')
            </section>

            <footer class="admin-footer">
                <p class="mb-0">© {{ date('Y') }} BTP Consulting. Tous droits réservés.</p>
            </footer>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            const $sidebar = $('#sidebar');
            const $mainContent = $('#main-content');
            $('#toggle-sidebar').on('click', function() {
                $sidebar.toggleClass('active');
                $mainContent.toggleClass('active');
            });
            $(document).on('click', function(e) {
                if ($(window).width() < 992) {
                    if (!$(e.target).closest('#sidebar, #toggle-sidebar').length) {
                        $sidebar.removeClass('active');
                        $mainContent.removeClass('active');
                    }
                }
            });
        });
    </script>
        // ... existing code ...
    <script src="{{ asset('asset/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <!-- ADD THIS LINE FOR AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @stack('scripts')
</body>

</html>
