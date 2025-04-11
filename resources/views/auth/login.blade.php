<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Administrateur - BTP Consulting</title>
    <!-- Importer la police Poppins via Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html, body {
            height: 100%;
            background-color: #f7f9fc;
            overflow-x: hidden;
        }

        .login-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('./img/carousel-3.jpg') no-repeat center center/cover;
            background-size: cover;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px; /* Réduit légèrement pour mieux organiser l'espace */
            border-radius: 20px;
            width: 100%;
            max-width: 400px; /* Réduit pour une meilleure proportion */
            min-height: 480px; /* Hauteur minimale pour éviter l'écrasement */
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Espacement équilibré des éléments */
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, #ff6200, #0066cc);
        }

        .login-container .logo-img {
            display: block;
            margin: 0 auto 15px; /* Réduit la marge pour un meilleur alignement */
            max-width: 100px; /* Taille du logo ajustée pour l'équilibre */
            height: auto;
        }

        .login-header {
            margin-bottom: 20px;
        }

        .login-header h2 {
            font-size: 1.4rem; /* Légèrement réduit pour mieux s'intégrer */
            color: #333;
            font-weight: 600;
        }

        .login-header p {
            font-size: 0.85rem; /* Réduit pour une apparence plus compacte */
            color: #666;
        }

        .form-group {
            margin-bottom: 18px; /* Légère augmentation pour espacer les champs */
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-size: 13px;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #0066cc;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(0, 102, 204, 0.1);
            outline: none;
        }

        .form-group .is-invalid {
            border-color: #dc3545;
        }

        .form-group .invalid-feedback {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg, #ff6200, #e55a00);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px; /* Ajout d'une marge pour l'espacement */
        }

        .btn-login:hover {
            background: linear-gradient(90deg, #e55a00, #ff6200);
            box-shadow: 0 5px 15px rgba(255, 98, 0, 0.3);
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 25px; /* Réduit pour les petits écrans */
                max-width: 340px; /* Ajusté pour une meilleure proportion */
                min-height: 420px; /* Hauteur ajustée */
                margin: 20px;
            }

            .login-container .logo-img {
                max-width: 80px; /* Réduit pour les petits écrans */
            }

            .login-header h2 {
                font-size: 1.2rem;
            }

            .login-header p {
                font-size: 0.75rem;
            }

            .form-group label {
                font-size: 12px;
            }

            .form-group input {
                padding: 8px 10px;
                font-size: 13px;
            }

            .btn-login {
                padding: 10px;
                font-size: 14px;
                margin-top: 8px;
            }
        }
    </style>
</head>
<body>
    <section class="login-section">
        <div class="login-container">
            <!-- Ajout du logo -->
            <img src="{{ asset('asset/img/logo-1.png') }}" alt="BTP Consulting Logo" class="logo-img">
            <div class="login-header">
                <h2>Connexion Administrateur</h2>
                <p>Veuillez vous connecter pour accéder au tableau de bord</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" name="email" value="{{ old('email') }}" placeholder="Entrez votre e-mail" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" name="password" placeholder="Entrez votre mot de passe" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-login">Se connecter</button>
            </form>
        </div>
    </section>
</body>
</html>
