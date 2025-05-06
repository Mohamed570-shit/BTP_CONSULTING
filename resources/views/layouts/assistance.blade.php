<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Assistance Layout')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body { background: #f7f7f7; }
        header {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 20px 0;
        }
        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }
        .projects-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            padding: 18px 32px;
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .projects-card .icon {
            font-size: 2rem;
            color: #ff6200;
        }
        .projects-card .count {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }
        .projects-card .label {
            font-size: 1rem;
            color: #666;
        }
        .profile-btn {
            background: #ff6200;
            color: #fff;
            border: none;
            border-radius: 25px;
            padding: 10px 22px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .profile-btn:hover {
            background: #e55a00;
        }
        footer {
            background: #222;
            color: #fff;
            text-align: center;
            padding: 18px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="projects-card">
                <span class="icon"><i class="fas fa-folder-open"></i></span>
                <span class="count">12</span>
                <span class="label">Total Projects</span>
            </div>
            <button class="profile-btn">
                <i class="fas fa-user-circle"></i>
                Profile
            </button>
        </div>
    </header>

    <main>
        <div class="container py-4">
            @yield('content')
        </div>
    </main>

    <footer>
        &copy; {{ date('Y') }} BTP Consulting. All rights reserved.
    </footer>
    <!-- Bootstrap JS (optional, for modals etc) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>