<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestResponsesTable extends Migration
{
    public function up()
    {
        Schema::create('test_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('question_1');
            $table->string('question_2');
            $table->string('question_3');
            $table->string('question_4');
            $table->string('question_5');
            $table->string('question_6');
            $table->string('question_7');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('test_responses');
    }
}
