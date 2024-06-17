<!DOCTYPE html>
<html lang="en">
<title>Mis Cursos | CustomAcademy</title>
@include('profile.partials.header')
<head>
    <link href="{{ asset('css/courses.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Mis Cursos</h1>
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
                        <form action="{{ route('courses.remove', $course->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    @include('profile.partials.footer')
</body>
</html>
