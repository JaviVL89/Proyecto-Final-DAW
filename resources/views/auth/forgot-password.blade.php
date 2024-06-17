<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar constraseña - CustomAcademy</title>
    <link href="{{ asset('css/forgot-password.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/image.png') }}">
</head>
<body>
    <div class="main-container">
        <div class="forgot-password-container">
            <div class="description">
                <p>Si has olvidado tu contraseña, introduce tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="session-status">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Enviar enlace de restablecimiento</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
