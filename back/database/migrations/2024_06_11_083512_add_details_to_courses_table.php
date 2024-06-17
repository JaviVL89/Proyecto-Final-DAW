<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('duration')->after('difficulty_level'); // Duración en horas
            $table->string('image')->nullable()->after('duration');
            $table->string('category')->after('image');
            $table->string('instructors')->after('category');
            $table->date('start_date')->after('instructors');
            $table->text('requirements')->nullable()->after('start_date');
        });
    }
    
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['duration', 'image', 'category', 'instructors', 'start_date', 'requirements']);
        });
    }
    
};
