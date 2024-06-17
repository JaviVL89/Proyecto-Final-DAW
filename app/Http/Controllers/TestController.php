<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestResponse;

class TestController extends Controller
{
    // Mostrar la vista del test
    public function show()
    {
        return view('learning-test');
    }

    // Manejar la lógica del formulario del test
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'question_1' => 'required|string',
            'question_2' => 'required|string',
            'question_3' => 'required|string',
            'question_4' => 'required|string',
            'question_5' => 'required|string',
            'question_6' => 'required|string',
            'question_7' => 'required|string',
        ]);

        // Guarda las respuestas del test
        $testResponse = TestResponse::create($validatedData + ['user_id' => auth()->id()]);

        // Lógica para recomendar cursos basada en las respuestas
        $recommendedCourse = $this->recommendCourse($testResponse);

        return view('test-result', ['course' => $recommendedCourse]);
    }

    private function recommendCourse($testResponse)
{
    // Inicializa una variable para almacenar la recomendación
    $recommendedCourse = 'Curso General de Programación';

    // Define reglas de recomendación basadas en las respuestas
    if ($testResponse->question_1 == 'beginner') {
        if ($testResponse->question_4 == 'career') {
            $recommendedCourse = 'Curso de Introducción a la Programación';
        } elseif ($testResponse->question_4 == 'hobby') {
            $recommendedCourse = 'Curso de Programación para Principiantes';
        } elseif ($testResponse->question_4 == 'projects') {
            $recommendedCourse = 'Curso de Proyectos Prácticos para Principiantes';
        } elseif ($testResponse->question_4 == 'improve') {
            $recommendedCourse = 'Curso de Mejora de Habilidades Básicas en Programación';
        }
    } elseif ($testResponse->question_1 == 'intermediate') {
        if ($testResponse->question_2 == 'javascript') {
            $recommendedCourse = 'Curso Intermedio de JavaScript';
        } elseif ($testResponse->question_2 == 'python') {
            $recommendedCourse = 'Curso Intermedio de Python';
        } elseif ($testResponse->question_2 == 'java') {
            $recommendedCourse = 'Curso Intermedio de Java';
        } elseif ($testResponse->question_2 == 'csharp') {
            $recommendedCourse = 'Curso Intermedio de C#';
        }
    } elseif ($testResponse->question_1 == 'advanced') {
        if ($testResponse->question_3 == '10+' && $testResponse->question_7 == 'intensive') {
            $recommendedCourse = 'Bootcamp Intensivo de Programación Avanzada';
        } elseif ($testResponse->question_2 == 'javascript') {
            $recommendedCourse = 'Curso Avanzado de JavaScript';
        } elseif ($testResponse->question_2 == 'python') {
            $recommendedCourse = 'Curso Avanzado de Python';
        } elseif ($testResponse->question_2 == 'java') {
            $recommendedCourse = 'Curso Avanzado de Java';
        } elseif ($testResponse->question_2 == 'csharp') {
            $recommendedCourse = 'Curso Avanzado de C#';
        }
    }

    // Considera preferencias adicionales
    if ($testResponse->question_5 == 'videos') {
        $recommendedCourse .= ' con Enfoque en Videos';
    } elseif ($testResponse->question_5 == 'readings') {
        $recommendedCourse .= ' con Material de Lectura';
    } elseif ($testResponse->question_5 == 'projects') {
        $recommendedCourse .= ' con Proyectos Prácticos';
    }

    if ($testResponse->question_6 == 'websites') {
        $recommendedCourse .= ' para Desarrollo de Sitios Web';
    } elseif ($testResponse->question_6 == 'applications') {
        $recommendedCourse .= ' para Desarrollo de Aplicaciones Móviles';
    } elseif ($testResponse->question_6 == 'games') {
        $recommendedCourse .= ' para Desarrollo de Juegos';
    } elseif ($testResponse->question_6 == 'data_science') {
        $recommendedCourse .= ' para Ciencia de Datos';
    }

    if ($testResponse->question_7 == 'structured') {
        $recommendedCourse .= ' con Plan Estructurado';
    } elseif ($testResponse->question_7 == 'flexible') {
        $recommendedCourse .= ' con Plan Flexible';
    } elseif ($testResponse->question_7 == 'intensive') {
        $recommendedCourse .= ' con Enfoque Intensivo';
    } elseif ($testResponse->question_7 == 'theoretical') {
        $recommendedCourse .= ' con Enfoque Teórico';
    }

    return $recommendedCourse;
}

    
}
