<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Message de Contact</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f6f6f6; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif; font-size: 16px; line-height: 1.6; color: #333333;">
    <!-- Wrapper -->
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin: 30px auto;">
        <tr>
            <td style="padding: 0;">
                <!-- Header -->
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #ffffff; border-bottom: 2px solid #003087;">
                
                    <tr>
                        <td style="padding: 0 20px 20px 20px; text-align: left;">
                            <h1 style="margin: 0; font-size: 22px; font-weight: bold; color: #003087;">Nouveau Message de Contact</h1>
                        </td>
                    </tr>
                </table>
                <!-- Content -->
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #ffffff; padding: 20px;">
                    <tr>
                        <td style="padding: 20px;">
                            <!-- Name -->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 12px;">
                                <tr>
                                    <td style="width: 100px; font-weight: bold; font-size: 15px; color: #333333; vertical-align: top;">Nom :</td>
                                    <td style="font-size: 15px; color: #333333; background-color: #f8faff; padding: 10px; border: 1px solid #e0e7ff; border-radius: 4px;">{{ $name }}</td>
                                </tr>
                            </table>
                            <!-- Email -->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 12px;">
                                <tr>
                                    <td style="width: 100px; font-weight: bold; font-size: 15px; color: #333333; vertical-align: top;">Email :</td>
                                    <td style="font-size: 15px; color: #333333; background-color: #f8faff; padding: 10px; border: 1px solid #e0e7ff; border-radius: 4px;">{{ $email }}</td>
                                </tr>
                            </table>
                            <!-- Subject -->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 12px;">
                                <tr>
                                    <td style="width: 100px; font-weight: bold; font-size: 15px; color: #333333; vertical-align: top;">Sujet :</td>
                                    <td style="font-size: 15px; color: #333333; background-color: #f8faff; padding: 10px; border: 1px solid #e0e7ff; border-radius: 4px;">{{ $subject }}</td>
                                </tr>
                            </table>
                            <!-- Company -->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 12px;">
                                <tr>
                                    <td style="width: 100px; font-weight: bold; font-size: 15px; color: #333333; vertical-align: top;">Entreprise :</td>
                                    <td style="font-size: 15px; color: #333333; background-color: #f8faff; padding: 10px; border: 1px solid #e0e7ff; border-radius: 4px;">
                                        @if ($fromCompany === 'oui')
                                            {{ $companyName ? $companyName : 'Nom non précisé' }}
                                        @else
                                            Non
                                        @endif
                                    </td>
                                </tr>
                            </table>
                            <!-- Divider -->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 15px 0;">
                                <tr>
                                    <td style="border-top: 1px solid #e0e7ff;"></td>
                                </tr>
                            </table>
                            <!-- Message -->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="font-weight: bold; font-size: 15px; color: #333333; margin-bottom: 10px;">Message :</td>
                                </tr>
                                <tr>
                                    <td style="font-size: 15px; color: #333333; background-color: #f8faff; padding: 15px; border: 1px solid #e0e7ff; border-radius: 4px;">{{ $messageContent }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!-- Footer -->
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #003087; padding: 20px; text-align: center; font-size: 13px; color: #ffffff;">
                    <tr>
                        <td>
                            <p style="margin: 0;">BTP Consulting</p>
                            <p style="margin: 5px 0;">AV. Ali Yarta, Wilaya Centaer, 3<sup>ème</sup> Étage, N° 029, Tétouan</p>
                            <p style="margin: 5px 0;">
                                <a href="mailto:contact@btpconsulting.ma" style="color: #ffffff; text-decoration: underline;">contact@btpconsulting.ma</a> |
                                <a href="tel:+212708080807" style="color: #ffffff; text-decoration: underline;">+212 708 080 807</a>
                            </p>
                            <p style="margin: 5px 0;">Ce message a été envoyé depuis le formulaire de contact de BTP Consulting.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
