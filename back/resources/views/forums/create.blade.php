<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Foro | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Crear Foro</h1>
        <form action="{{ route('forums.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="categories">Categorías</label>
                <select id="categories" name="categories[]" class="form-control" multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Etiquetas</label>
                <select id="tags" name="tags[]" class="form-control" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear Foro</button>
        </form>
        <a href="{{ route('forums.index') }}" class="btn btn-secondary">Volver</a>
    </main>
    @include('profile.partials.footer')
</body>
</html>
