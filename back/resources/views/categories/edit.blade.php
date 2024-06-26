<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Categoría | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Editar Categoría</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control">{{ $category->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </main>
    @include('profile.partials.footer')
</body>
</html>
