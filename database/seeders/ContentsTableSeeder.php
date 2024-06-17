<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contents')->insert([
            ['id' => 1, 'course_id' => 1, 'title' => 'Introducción a HTML5', 'description' => 'Este contenido cubre los conceptos básicos de HTML5.', 'file_path' => 'uploads/courses/HTML5_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 2, 'course_id' => 2, 'title' => 'Introducción a Java Spring', 'description' => 'Este contenido cubre los conceptos básicos de Java Spring.', 'file_path' => 'uploads/courses/Java_SpringBoot_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 3, 'course_id' => 3, 'title' => 'Introducción a JavaScript', 'description' => 'Este contenido cubre los conceptos básicos de JavaScript.', 'file_path' => 'uploads/courses/JavaScript_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 4, 'course_id' => 4, 'title' => 'Introducción a Python', 'description' => 'Este contenido cubre los conceptos básicos de Python.', 'file_path' => 'uploads/courses/Python_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 5, 'course_id' => 5, 'title' => 'Introducción a Data Science', 'description' => 'Este contenido cubre los conceptos básicos de Data Science.', 'file_path' => 'uploads/courses/Data_Science_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 6, 'course_id' => 6, 'title' => 'Introducción a Desarrollo Web', 'description' => 'Este contenido cubre los conceptos básicos de Desarrollo Web.', 'file_path' => 'uploads/courses/Desarrollo_Web_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 7, 'course_id' => 7, 'title' => 'Introducción a DevOps', 'description' => 'Este contenido cubre los conceptos básicos de DevOps.', 'file_path' => 'uploads/courses/DevOps_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 8, 'course_id' => 8, 'title' => 'Introducción a Machine Learning', 'description' => 'Este contenido cubre los conceptos básicos de Machine Learning.', 'file_path' => 'uploads/courses/Machine_Learning_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 9, 'course_id' => 9, 'title' => 'Introducción a Blockchain', 'description' => 'Este contenido cubre los conceptos básicos de Blockchain.', 'file_path' => 'uploads/courses/Blockchain_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
            ['id' => 10, 'course_id' => 10, 'title' => 'Introducción a Ciberseguridad', 'description' => 'Este contenido cubre los conceptos básicos de Ciberseguridad.', 'file_path' => 'uploads/courses/Ciberseguridad_Introduccion.pdf', 'type' => 'pptx', 'created_at' => '2024-06-11 16:34:03', 'updated_at' => '2024-06-11 16:34:03'],
        ]);
    }
}
