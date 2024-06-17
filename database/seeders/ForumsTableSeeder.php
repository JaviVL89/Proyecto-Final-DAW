<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('forums')->insert([
            ['id' => 18, 'user_id' => 4, 'title' => 'Bienvenido a CustomAcademy', 'description' => 'Estamos encantados de tenerte en nuestra comunidad de aprendizaje. Aquí encontrarás una amplia variedad de cursos diseñados para ayudarte a alcanzar tus objetivos educativos y profesionales. Desde fundamentos de HTML y JavaScript hasta aplicaciones avanzadas con Java Spring, tenemos algo para todos.\r\n\r\nTe animamos a explorar nuestros cursos y a participar en nuestros foros, donde puedes compartir tus experiencias, hacer preguntas y conectar con otros estudiantes. No dudes en comenzar tu aventura educativa con nuestro test personalizado para recibir recomendaciones adaptadas a tus intereses y nivel de conocimiento.\r\n\r\nRecuerda, el aprendizaje es un viaje continuo y estamos aquí para apoyarte en cada paso del camino. ¡Vamos a aprender juntos y a alcanzar grandes logros!', 'created_at' => '2024-06-14 10:28:17', 'updated_at' => '2024-06-16 14:51:13'],
        ]);
    }
}
