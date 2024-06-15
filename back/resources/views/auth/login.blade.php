<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CustomAcademy</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/image.png') }}">
</head>
<body>
    <div class="main-container">
        <div class="login-container">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-header">
                    <h2>Custom Academy</h2>
                    <h1>Iniciar sesión</h1>
                </div>

                <div class="form-group">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control" placeholder="Email">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" name="password" required class="form-control" placeholder="Contraseña">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-actions">
                    @if (Route::has('password.request'))
                        <a class="forgot-password-link" href="{{ route('password.request') }}">¿Has olvidado tu contraseña?</a>
                    @endif
                   
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse</a>
                </div>            
                
            </form>
        </div>
    </div>
</body>
</html>
