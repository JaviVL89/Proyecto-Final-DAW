<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar correo electrónico - CustomAcademy</title>
    <link href="{{ asset('css/forgot-password.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/image.png') }}">
</head>
<body>
    <div class="main-container">
        <div class="forgot-password-container">
            <div class="description">
                <p>Antes de continuar, por favor revisa tu correo electrónico para verificar tu email. Si no recibiste el correo electrónico, puedes solicitar uno nuevo.</p>
            </div>

            @if (session('message'))
                <div class="session-status">
                    {{ session('message') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">haz clic aquí para solicitar otro</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
