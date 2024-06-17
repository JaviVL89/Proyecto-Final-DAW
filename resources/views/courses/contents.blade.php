<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $content->title }} | CustomAcademy</title>
    @include('profile.partials.header')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>{{ $content->title }}</h1>
        <p>{{ $content->description }}</p>       
         <a href="{{ route('courses.index') }}" class="btn">Volver al Catálogo</a>
         <a href="javascript:history.back()" class="btn">Volver Atrás</a>
         <a href="{{ route('contents.download', [$course->id, $content->id]) }}" class="btn">Descargar</a>

        @if(pathinfo($content->file_path, PATHINFO_EXTENSION) == 'pdf')
            <embed src="{{ asset($content->file_path) }}" width="100%" height="600px" type="application/pdf">
        @endif
        </main>
    @include('profile.partials.footer')
</body>
</html>
