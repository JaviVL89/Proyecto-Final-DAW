<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Post | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Editar Post</h1>
        <form action="{{ route('posts.update', ['forum' => $forum->id, 'post' => $post->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" class="form-control" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Post</button>
        </form>
        <a href="{{ route('forums.show', $forum->id) }}" class="btn btn-secondary">Volver al Foro</a>
    </main>
    @include('profile.partials.footer')
</body>
</html>
