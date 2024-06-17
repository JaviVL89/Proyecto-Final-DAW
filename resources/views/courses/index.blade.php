<!DOCTYPE html>
<html lang="en">
<title>Catálogo de Cursos | CustomAcademy</title>
@include('profile.partials.header')
<head>
    <link href="{{ asset('css/courses.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Catálogo de Cursos</h1>

        <form method="GET" action="{{ route('courses.index') }}">
            <div>
                <label>
                    <input type="checkbox" name="categories[]" value="Frontend" {{ in_array('Frontend', request('categories', [])) ? 'checked' : '' }}>
                    Frontend
                </label>
                <label>
                    <input type="checkbox" name="categories[]" value="Backend" {{ in_array('Backend', request('categories', [])) ? 'checked' : '' }}>
                    Backend
                </label>
                <label>
                    <input type="checkbox" name="categories[]" value="Data Science" {{ in_array('Data Science', request('categories', [])) ? 'checked' : '' }}>
                    Data Science
                </label>
                <label>
                    <input type="checkbox" name="categories[]" value="IT & Software" {{ in_array('IT & Software', request('categories', [])) ? 'checked' : '' }}>
                    IT & Software
                </label>
            </div>
            <button type="submit" class="btn">Filtrar</button>
        </form>

        <div class="course-grid">
            @foreach ($courses as $course)
                <div class="course-card">
                    <img src="{{ asset($course->image) }}" alt="{{ $course->name }}" class="course-image">
                    <div class="course-info">
                        <h2>{{ $course->name }}</h2>
                        <p>{{ $course->description }}</p>
                        <p><strong>Duración:</strong> {{ $course->duration }}</p>
                        <p><strong>Categoría:</strong> {{ $course->category }}</p>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn">Ver más</a>
                        
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $courses->links() }}
        </div>
    </main>
    @include('profile.partials.footer')
</body>
</html>
