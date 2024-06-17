<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('category_forum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('forum_id')->constrained('forums')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('category_forum');
    }
};
