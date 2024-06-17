<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Post | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Crear Post en {{ $forum->title }}</h1>
        <form action="{{ route('posts.store', ['forum' => $forum->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="forum_id" value="{{ $forum->id }}">
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear Post</button>
        </form>
        <a href="{{ route('forums.show', $forum->id) }}" class="btn btn-secondary">Volver al Foro</a>
    </main>
    @include('profile.partials.footer')
</body>
</html>
