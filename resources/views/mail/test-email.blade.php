<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message de Contact</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .email-container {
            width: 100%;
            max-width: 650px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transform: translateY(0);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .email-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
        }

        .email-header {
            background: linear-gradient(90deg, #FF6200, #FF8C00);
            text-align: center;
            padding: 20px;
            color: #fff;
        }

        .email-header h2 {
            font-size: 28px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .email-body {
            padding: 30px;
        }

        .email-body h3 {
            font-size: 20px;
            font-weight: 500;
            color: #222;
            margin-bottom: 20px;
            border-bottom: 2px solid #FF6200;
            padding-bottom: 10px;
        }

        .email-body p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 12px;
            color: #444;
        }

        .email-body strong {
            color: #FF6200;
            font-weight: 600;
        }

        .email-footer {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            font-size: 13px;
            color: #666;
            border-top: 1px solid #eee;
        }

        .email-footer p {
            margin: 0;
        }

        /* Animation for smooth fade-in */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .email-container {
            animation: fadeIn 0.6s ease-out;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .email-container {
                width: 90%;
                padding: 15px;
            }

            .email-header h2 {
                font-size: 22px;
            }

            .email-body {
                padding: 20px;
            }

            .email-body h3 {
                font-size: 18px;
            }

            .email-body p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>BTP CONSULTING</h2>
        </div>

        <div class="email-body">
            <h3>Nouvelle demande de contact</h3>
            <p><strong>Nom:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Sujet:</strong> {{ $subject }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $messageContent }}</p>
        </div>

        <div class="email-footer">
            <p>© 2025 BTP Consulting. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
