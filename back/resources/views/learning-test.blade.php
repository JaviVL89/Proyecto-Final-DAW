<!DOCTYPE html>
<html lang="en">
<title>Test | CustomAcademy</title>
@include('profile.partials.header')
<head>
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <script src="{{ asset('js/test.js') }}" defer></script>
</head>
<body>
    <main class="main-content">
        <h1>Test de Aprendizaje</h1>
        <form action="{{ route('test.submit') }}" method="POST">
            @csrf
            <div class="form-group active">
                <label for="question_1">Pregunta 1: ¿Cuál es tu nivel de conocimiento en programación?</label>
                <div class="options">
                    <input type="radio" id="beginner" name="question_1" value="beginner">
                    <label for="beginner">Principiante</label>

                    <input type="radio" id="intermediate" name="question_1" value="intermediate">
                    <label for="intermediate">Intermedio</label>

                    <input type="radio" id="advanced" name="question_1" value="advanced">
                    <label for="advanced">Avanzado</label>
                </div>
            </div>
            <div class="form-group">
                <label for="question_2">Pregunta 2: ¿Cuál es tu lenguaje de programación preferido?</label>
                <div class="options">
                    <input type="radio" id="javascript" name="question_2" value="javascript">
                    <label for="javascript">JavaScript</label>

                    <input type="radio" id="python" name="question_2" value="python">
                    <label for="python">Python</label>

                    <input type="radio" id="java" name="question_2" value="java">
                    <label for="java">Java</label>

                    <input type="radio" id="csharp" name="question_2" value="csharp">
                    <label for="csharp">C#</label>
                </div>
            </div>
            <div class="form-group">
                <label for="question_3">Pregunta 3: ¿Cuánto tiempo puedes dedicar al estudio cada semana?</label>
                <div class="options">
                    <input type="radio" id="1-2" name="question_3" value="1-2">
                    <label for="1-2">1-2 horas</label>

                    <input type="radio" id="3-5" name="question_3" value="3-5">
                    <label for="3-5">3-5 horas</label>

                    <input type="radio" id="6-10" name="question_3" value="6-10">
                    <label for="6-10">6-10 horas</label>

                    <input type="radio" id="10+" name="question_3" value="10+">
                    <label for="10+">Más de 10 horas</label>
                </div>
            </div>
            <div class="form-group">
                <label for="question_4">Pregunta 4: ¿Cuál es tu objetivo principal al aprender programación?</label>
                <div class="options">
                    <input type="radio" id="career" name="question_4" value="career">
                    <label for="career">Desarrollar una carrera profesional</label>

                    <input type="radio" id="hobby" name="question_4" value="hobby">
                    <label for="hobby">Aprender como hobby</label>

                    <input type="radio" id="projects" name="question_4" value="projects">
                    <label for="projects">Crear proyectos personales</label>

                    <input type="radio" id="improve" name="question_4" value="improve">
                    <label for="improve">Mejorar habilidades existentes</label>
                </div>
            </div>
            <div class="form-group">
                <label for="question_5">Pregunta 5: ¿Prefieres aprender a través de videos, lecturas o proyectos prácticos?</label>
                <div class="options">
                    <input type="radio" id="videos" name="question_5" value="videos">
                    <label for="videos">Videos</label>

                    <input type="radio" id="readings" name="question_5" value="readings">
                    <label for="readings">Lecturas</label>

                    <input type="radio" id="projects" name="question_5" value="projects">
                    <label for="projects">Proyectos prácticos</label>

                    <input type="radio" id="mix" name="question_5" value="mix">
                    <label for="mix">Una combinación de todos</label>
                </div>
            </div>
            <div class="form-group">
                <label for="question_6">Pregunta 6: ¿Qué tipo de proyectos te gustaría crear?</label>
                <div class="options">
                    <input type="radio" id="websites" name="question_6" value="websites">
                    <label for="websites">Sitios web</label>

                    <input type="radio" id="applications" name="question_6" value="applications">
                    <label for="applications">Aplicaciones móviles</label>

                    <input type="radio" id="games" name="question_6" value="games">
                    <label for="games">Juegos</label>

                    <input type="radio" id="data_science" name="question_6" value="data_science">
                    <label for="data_science">Proyectos de ciencia de datos</label>
                </div>
            </div>
            <div class="form-group">
                <label for="question_7">Pregunta 7: ¿Cómo prefieres estructurar tu aprendizaje?</label>
                <div class="options">
                    <input type="radio" id="structured" name="question_7" value="structured">
                    <label for="structured">Estructurado, con un plan claro</label>

                    <input type="radio" id="flexible" name="question_7" value="flexible">
                    <label for="flexible">Flexible, a mi propio ritmo</label>

                    <input type="radio" id="intensive" name="question_7" value="intensive">
                    <label for="intensive">Intensivo, con mucha práctica</label>

                    <input type="radio" id="theoretical" name="question_7" value="theoretical">
                    <label for="theoretical">Teórico, con enfoque en conceptos</label>
                </div>
            </div>
            <div class="navigation-buttons">
                <button type="button" id="prev">Anterior</button>
                <button type="button" id="next">Siguiente</button>
                <button type="submit">Enviar</button>
            </div>
        </form>
        <div id="progress">
            @for ($i = 0; $i < 7; $i++)
                <div class="progress-indicator"></div>
            @endfor
        </div>
    </main>

    @include('profile.partials.footer')
</body>
</html>
