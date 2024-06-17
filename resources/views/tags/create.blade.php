<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Etiqueta | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Crear Etiqueta</h1>
        <form action="{{ route('tags.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
    @include('profile.partials.footer')
</body>
</html>
