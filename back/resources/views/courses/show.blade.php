<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $course->name }} | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/courses.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <div class="course-detail">
            <img src="{{ asset($course->image) }}" alt="{{ $course->name }}" class="course-image">
            <div class="course-info">
                <h1>{{ $course->name }}</h1>
                <p>{{ $course->description }}</p>
                <div class="course-contents">
                    <h2>Contenidos del Curso</h2>
                    @if($course->contents && count($course->contents) > 0)
                        <ul>
                            @foreach ($course->contents as $content)
                                <li>
                                    <h3>{{ $content->title }}</h3>
                                    <p>{{ $content->description }}</p>
                                    <a href="{{ route('contents.show', [$course->id, $content->id]) }}" class="btn">Iniciar curso</a>
                                    <a href="{{ route('contents.download', [$course->id, $content->id]) }}" class="btn">Descargar</a>
                                    <a href="javascript:history.back()" class="btn">Volver Atrás</a>

                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No hay contenidos disponibles para este curso.</p>
                    @endif
                </div>
                <p><strong>Duración:</strong> {{ $course->duration }}</p>
                <p><strong>Categoría:</strong> {{ $course->category }}</p>
                <p><strong>Instructores:</strong> {{ $course->instructors }}</p>
                <p><strong>Fecha de inicio:</strong> {{ $course->start_date }}</p>
                <p><strong>Requisitos:</strong> {{ $course->requirements }}</p>
                <form action="{{ route('courses.add', $course->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn">Añadir a mis cursos</button>
                </form>
            </div>
        </div>
    </main>
    @include('profile.partials.footer')
</body>
</html>
