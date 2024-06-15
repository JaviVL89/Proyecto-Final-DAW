<!DOCTYPE html>
<html lang="en">
<head>
    <title>Categorías | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Categorías</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Añadir Categoría</a>
        <div class="category-list">
            @foreach ($categories as $category)
                <div class="category-card">
                    <h2><a href="{{ route('categories.edit', $category->id) }}">{{ $category->name }}</a></h2>
                    <p>{{ $category->description }}</p>
                </div>
            @endforeach
        </div>
    </main>
    @include('profile.partials.footer')
</body>
</html>
