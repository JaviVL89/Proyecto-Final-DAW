<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            // Verificar si la columna 'duration' ya existe antes de agregarla
            if (!Schema::hasColumn('courses', 'duration')) {
                $table->integer('duration')->after('difficulty_level')->notNullable();
            }

            if (!Schema::hasColumn('courses', 'image')) {
                $table->string('image')->nullable()->after('duration');
            }

            if (!Schema::hasColumn('courses', 'category')) {
                $table->string('category')->notNullable()->after('image');
            }

            if (!Schema::hasColumn('courses', 'instructors')) {
                $table->string('instructors')->notNullable()->after('category');
            }

            if (!Schema::hasColumn('courses', 'start_date')) {
                $table->date('start_date')->notNullable()->after('instructors');
            }

            if (!Schema::hasColumn('courses', 'requirements')) {
                $table->text('requirements')->nullable()->after('start_date');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['duration', 'image', 'category', 'instructors', 'start_date', 'requirements']);
        });
    }
}
