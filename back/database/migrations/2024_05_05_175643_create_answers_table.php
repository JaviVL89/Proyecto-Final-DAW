<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')->constrained('exercises')->onDelete('cascade');
            $table->text('response_text');
            $table->boolean('is_correct');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('answers');
    }
};
