<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Foro | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Editar Foro</h1>
        <form action="{{ route('forums.update', $forum->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $forum->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea id="description" name="description" class="form-control" required>{{ $forum->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="categories">Categorías</label>
                <select id="categories" name="categories[]" class="form-control" multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $forum->categories->contains($category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Etiquetas</label>
                <select id="tags" name="tags[]" class="form-control" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" {{ $forum->tags->contains($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Foro</button>
        </form>
        <a href="{{ route('forums.index') }}" class="btn btn-secondary">Volver</a>
    </main>
    @include('profile.partials.footer')
</body>
</html>
