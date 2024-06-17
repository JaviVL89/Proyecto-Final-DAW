<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar Comentario | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Editar Comentario</h1>
        <form action="{{ route('comments.update', ['forum' => $forum->id, 'post' => $post->id, 'comment' => $comment->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" class="form-control" required>{{ $comment->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Comentario</button>
        </form>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
    </main>
    @include('profile.partials.footer')
</body>
</html>
