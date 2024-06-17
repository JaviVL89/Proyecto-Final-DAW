<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContentsTableSeeder extends Seeder
{
    public function run()
    {
        $contents = [
            [
                'course_id' => 1, // Reemplaza con el ID del curso HTML5
                'title' => 'Introducción a HTML5',
                'description' => 'Este contenido cubre los conceptos básicos de HTML5.',
                'file_path' => 'uploads/courses/HTML5_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 2, // Reemplaza con el ID del curso Java Spring
                'title' => 'Introducción a Java Spring',
                'description' => 'Este contenido cubre los conceptos básicos de Java Spring.',
                'file_path' => 'uploads/courses/Java_SpringBoot_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 3, // Reemplaza con el ID del curso JavaScript
                'title' => 'Introducción a JavaScript',
                'description' => 'Este contenido cubre los conceptos básicos de JavaScript.',
                'file_path' => 'uploads/courses/JavaScript_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 4, // Reemplaza con el ID del curso Python
                'title' => 'Introducción a Python',
                'description' => 'Este contenido cubre los conceptos básicos de Python.',
                'file_path' => 'uploads/courses/Python_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 5, // Reemplaza con el ID del curso Data Science
                'title' => 'Introducción a Data Science',
                'description' => 'Este contenido cubre los conceptos básicos de Data Science.',
                'file_path' => 'uploads/courses/Data_Science_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 6, // Reemplaza con el ID del curso Desarrollo Web
                'title' => 'Introducción a Desarrollo Web',
                'description' => 'Este contenido cubre los conceptos básicos de Desarrollo Web.',
                'file_path' => 'uploads/courses/Desarrollo_Web_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 7, // Reemplaza con el ID del curso DevOps
                'title' => 'Introducción a DevOps',
                'description' => 'Este contenido cubre los conceptos básicos de DevOps.',
                'file_path' => 'uploads/courses/DevOps_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 8, // Reemplaza con el ID del curso Machine Learning
                'title' => 'Introducción a Machine Learning',
                'description' => 'Este contenido cubre los conceptos básicos de Machine Learning.',
                'file_path' => 'uploads/courses/Machine_Learning_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 9, // Reemplaza con el ID del curso Blockchain
                'title' => 'Introducción a Blockchain',
                'description' => 'Este contenido cubre los conceptos básicos de Blockchain.',
                'file_path' => 'uploads/courses/Blockchain_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'course_id' => 10, // Reemplaza con el ID del curso Ciberseguridad
                'title' => 'Introducción a Ciberseguridad',
                'description' => 'Este contenido cubre los conceptos básicos de Ciberseguridad.',
                'file_path' => 'uploads/courses/Ciberseguridad_Introduccion.pptx',
                'type' => 'pptx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('contents')->insert($contents);
    }
}
