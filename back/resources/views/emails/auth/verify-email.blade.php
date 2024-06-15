<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Dirección de Correo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .email-header img {
            max-width: 150px;
        }
        .email-body {
            padding: 20px;
        }
        .email-body h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .email-body p {
            margin-bottom: 20px;
        }
        .email-body a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            text-decoration: none;
        }
        .email-footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ asset('images/logo.png') }}" alt="CustomAcademy">
        </div>
        <div class="email-body">
            <h1>¡Hola!</h1>
            <p>Por favor, haz clic en el botón de abajo para verificar tu dirección de correo electrónico.</p>
            <a href="{{ $url }}">Verificar Dirección de Correo</a>
            <p>Si no creaste una cuenta, no es necesaria ninguna acción adicional.</p>
        </div>
        <div class="email-footer">
            <p>Saludos,<br>El equipo de CustomAcademy</p>
        </div>
    </div>
</body>
</html>
