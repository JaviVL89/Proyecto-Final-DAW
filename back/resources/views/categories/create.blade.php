<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Categoría | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Crear Categoría</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </main>
    @include('profile.partials.footer')
</body>
</html>
