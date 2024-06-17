<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $forum->title }} | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>{{ $forum->title }}</h1>
        <p>{{ $forum->description }}</p>
        <a href="{{ route('posts.create', ['forum' => $forum->id]) }}" class="btn btn-primary">Crear nuevo post</a>
        <a href="{{ route('forums.index') }}" class="btn btn-secondary">Volver a Foros</a>
        <div class="post-list">
            @foreach ($forum->posts as $post)
                <div class="post-card">
                    <h2><a href="{{ route('posts.show', ['forum' => $forum->id, 'post' => $post->id]) }}">{{ $post->content }}</a></h2>
                    <p>Publicado por: {{ $post->user->name }} el {{ $post->published_at }}</p>
                    @can('update', $post)
                        <a href="{{ route('posts.edit', ['forum' => $forum->id, 'post' => $post->id]) }}" class="btn btn-secondary">Editar</a>
                    @endcan
                    @can('delete', $post)
                        <form action="{{ route('posts.destroy', ['forum' => $forum->id, 'post' => $post->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    @endcan
                </div>
            @endforeach
        </div>
    </main>
    @include('profile.partials.footer')
</body>
</html>
