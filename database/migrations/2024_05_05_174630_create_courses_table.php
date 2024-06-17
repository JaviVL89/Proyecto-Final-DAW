<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
        $table->string('name');
        $table->text('description');
        $table->string('difficulty_level');
        $table->integer('duration');
        $table->string('image')->nullable();
        $table->string('category');
        $table->string('instructors');
        $table->date('start_date');
        $table->text('requirements')->nullable();
        $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('courses');
    }
};
