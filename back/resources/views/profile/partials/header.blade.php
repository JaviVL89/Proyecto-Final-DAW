<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomAcademy</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/image.png') }}">
    <script src="{{ asset('js/common.js') }}" defer></script>
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="{{ asset('images/image.png') }}" alt="Logo" class="logo">
            <span class="site-name">CustomAcademy</span>
        </div>
        <nav class="nav">
            <a href="/dashboard">Inicio</a>
            <a href="{{ route('courses.my') }}">Mis cursos</a>
            <a href="/courses">Catálogo</a>
            <a href="/forums">Foro</a>

        </nav>
        <form action="{{ route('courses.index') }}" method="GET" class="form">
            <button>
                <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                    <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            <input class="input" placeholder="Buscar" required type="text" name="search" value="{{ request('search') }}">
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
