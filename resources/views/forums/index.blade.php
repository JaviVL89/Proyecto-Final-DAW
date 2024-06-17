<!DOCTYPE html>
<html lang="en">
<title>Foros | CustomAcademy</title>
@include('profile.partials.header')
<link href="{{ asset('css/forums.css') }}" rel="stylesheet">
<body>
    <main class="main-content">
        <h1>Foros</h1>
        <a href="{{ route('forums.create') }}" class="btn btn-primary">Crear nuevo foro</a>
        <div class="forum-list">
            @foreach ($forums as $forum)
                <div class="forum-card">
                    <h2><a href="{{ route('forums.show', $forum->id) }}">{{ $forum->title }}</a></h2>
                    <p>{{ $forum->description }}</p>
                    <p>Categorías: 
                        @foreach ($forum->categories as $category)
                            {{ $category->name }},
                        @endforeach
                    </p>
                    <p>Etiquetas: 
                        @foreach ($forum->tags as $tag)
                            {{ $tag->name }},
                        @endforeach
                    </p>
                    @can('update', $forum)
                        <a href="{{ route('forums.edit', $forum->id) }}" class="btn btn-secondary">Editar</a>
                    @endcan
                    @can('delete', $forum)
                        <form action="{{ route('forums.destroy', $forum->id) }}" method="POST" style="display: inline;">
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
