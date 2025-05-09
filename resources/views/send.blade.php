<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>

    <!-- Inclure Bootstrap pour les styles -->
    <style>
        /* Styles de base pour l'e-mail */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Nouveau message de contact</h1>

    <p><strong>Nom :</strong> {{ $data['name'] }}</p>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Objet :</strong> {{ $data['subject'] }}</p>
    <p><strong>Message :</strong> {{ $data['message'] }}</p>

    <p>
        Vous pouvez répondre directement à cet e-mail ou contacter {{ $data['name'] }} à l'adresse {{ $data['email'] }}.
    </p>

    <p class="footer">
        &copy; {{ date('Y') }} Niger Academy. Tous droits réservés.
    </p>
</div>

</body>
</html>
