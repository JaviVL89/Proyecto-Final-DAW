<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - CustomAcademy</title>
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <script src="{{ asset('js/profile.js') }}" defer></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/image.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="{{ asset('images/image.png') }}" alt="Logo" class="logo">
            <span class="site-name">CustomAcademy</span>
        </div>
        <nav class="nav">
            <a href="/dashboard">Inicio</a>
            <a href="#">Mis cursos</a>
            <a href="/courses">Catálogo</a>
        </nav>
        <form class="form">
            <button>
                <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                    <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            <input class="input" placeholder="Buscar" required="" type="text">
            <button class="reset" type="reset">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </form>
        <div class="icons">
            <div class="profile-menu">
                <a href="#" id="profile-button">
                    @if (Auth::user()->profile_picture)
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="User">
                    @else
                        <img src="{{ asset('images/default-user.png') }}" alt="User">
                    @endif
                </a>
                <div class="dropdown-content" id="dropdown-content">
                    <a href="{{ route('profile.edit', ['user' => Auth::user()->id]) }}">Editar Perfil</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="separator"></div>
    <main class="main">
        <div class="profile-container">
            <h2>Perfil</h2>
            <div id="message-container"></div> <!-- Contenedor para mensajes -->
            <div class="section">
                <!-- Formulario para subir la foto de perfil -->
                <form id="profile-picture-form" method="POST" action="{{ route('profile.updatePicture') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="profile-picture-upload" for="profile_picture">
                        <img id="profile-picture-preview" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('images/default-user.png') }}" alt="User">
                        <input type="file" id="profile_picture" name="profile_picture" onchange="previewImage(event); document.getElementById('profile-picture-form').submit();">
                    </label>
                </form>

                <!-- Formulario para eliminar la foto de perfil -->
                <form id="delete-profile-picture-form" method="POST" action="{{ route('profile.deletePicture') }}">
                    @csrf
                    @method('DELETE')
                    <p class="delete-profile-picture">Eliminar foto de perfil</p>
                </form>

                <!-- Formulario de actualización de información del perfil -->
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="section">
                @include('profile.partials.update-password-form')
            </div>
            <div class="section">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </main>

    <footer class="footer">
    <div class="footer-content">
        <a href="{{ route('privacy.policy') }}">Política de privacidad</a>
        <a href="{{ route('terms.conditions') }}">Términos y condiciones</a>
        <a href="{{ route('contact') }}">Contacto</a>
        <a href="{{ route('about') }}">Acerca de</a>
        <p>&copy; 2024 CustomAcademy | Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>
