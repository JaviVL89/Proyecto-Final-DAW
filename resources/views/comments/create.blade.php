<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crear Comentario | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/forums.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Crear Comentario</h1>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="post_id">Post</label>
                <select id="post_id" name="post_id" class="form-control" required>
                    @foreach ($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->content }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea id="content" name="content" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear Comentario</button>
        </form>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
    </main>
    @include('profile.partials.footer')
</body>
</html>
