<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Etiqueta | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Editar Etiqueta</h1>
        <form action="{{ route('tags.update', $tag->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $tag->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </main>
    @include('profile.partials.footer')
</body>
</html>
