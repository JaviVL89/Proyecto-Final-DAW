<!DOCTYPE html>
<html lang="en">
<head>
    <title>Posts | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Posts en {{ $forum->title }}</h1>
        <a href="{{ route('posts.create', $forum->id) }}" class="btn btn-primary">Crear nuevo post</a>
        <a href="{{ route('forums.index') }}" class="btn btn-secondary">Volver a Foros</a>
        <div class="post-list">
            @foreach ($posts as $post)
                <div class="post-card">
                    <h2>{{ $post->user->name }}</h2>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('posts.show', ['forum' => $forum->id, 'post' => $post->id]) }}" class="btn btn-secondary">Ver Post</a>
                    <a href="{{ route('posts.edit', ['forum' => $forum->id, 'post' => $post->id]) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('posts.destroy', ['forum' => $forum->id, 'post' => $post->id]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </main>
    @include('profile.partials.footer')
</body>
</html>
