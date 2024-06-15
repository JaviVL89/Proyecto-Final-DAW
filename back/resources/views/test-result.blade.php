<!DOCTYPE html>
<html lang="en">
<title>Resultado del Test | CustomAcademy</title>
@include('profile.partials.header')
<head>
    <link href="{{ asset('css/test-result.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Resultado del Test</h1>
        <p>Gracias por completar el test. Basado en tus respuestas, te recomendamos el siguiente curso:</p>
        <h2>{{ $course }}</h2>
        <a href="{{ route('dashboard') }}" class="btn">Volver al Dashboard</a>
    </main>
    @include('profile.partials.footer')
</body>
</html>
