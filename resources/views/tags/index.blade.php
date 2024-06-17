<!DOCTYPE html>
<html lang="en">
<head>
    <title>Etiquetas | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Etiquetas</h1>
        <a href="{{ route('tags.create') }}" class="btn btn-primary">Añadir Etiqueta</a>
        <div class="tag-list">
            @foreach ($tags as $tag)
                <div class="tag-card">
                    <h2><a href="{{ route('tags.edit', $tag->id) }}">{{ $tag->name }}</a></h2>
                </div>
            @endforeach
        </div>
    </main>
    @include('profile.partials.footer')
</body>
</html>
