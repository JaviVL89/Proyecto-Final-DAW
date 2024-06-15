<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ver Post | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>{{ $post->content }}</h1>
        <p>Publicado por: {{ $post->user->name }} el {{ $post->published_at }}</p>
        <a href="{{ route('forums.show', ['forum' => $forum->id]) }}" class="btn btn-secondary">Volver al Foro</a>

        @can('update', $post)
            <a href="{{ route('posts.edit', ['forum' => $forum->id, 'post' => $post->id]) }}" class="btn btn-secondary">Editar Post</a>
        @endcan

        @can('delete', $post)
            <form action="{{ route('posts.destroy', ['forum' => $forum->id, 'post' => $post->id]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar Post</button>
            </form>
        @endcan

        <h2>Comentarios</h2>
        @foreach($post->comments as $comment)
            <div class="comment">
                <p>{{ $comment->content }}</p>
                <p>Por: {{ $comment->user->name }} en {{ $comment->created_at }}</p>
                @can('update', $comment)
                    <a href="{{ route('comments.edit', ['forum' => $forum->id, 'post' => $post->id, 'comment' => $comment->id]) }}" class="btn btn-secondary">Editar</a>
                @endcan
                @can('delete', $comment)
                    <form action="{{ route('comments.destroy', ['forum' => $forum->id, 'post' => $post->id, 'comment' => $comment->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                @endcan
            </div>
        @endforeach

        <h3>Añadir comentario</h3>
        <form action="{{ route('comments.store', ['forum' => $forum->id, 'post' => $post->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Añadir comentario</button>
        </form>
    </main>
    @include('profile.partials.footer')
</body>
</html>
