<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registro - CustomAcademy</title>
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/image.png') }}">
    <script src="{{ asset('js/register.js') }}"></script>

</head>
<body>
    <div class="register-container">
        <form id="registerForm" method="POST" action="{{ route('register') }}">
            @csrf

            <h2>Bienvenido a CustomAcademy</h2>

            <!-- Name -->
            <div class="form-group">
                <label for="name">Nombre</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Already registered link -->
            <div class="form-footer">
                <a href="{{ route('login') }}">¿Ya estás registrado?</a>
                <button id="registerButton" type="submit">Registrarse</button>
            </div>
        </form>
    </div>

    
</body>
</html>
