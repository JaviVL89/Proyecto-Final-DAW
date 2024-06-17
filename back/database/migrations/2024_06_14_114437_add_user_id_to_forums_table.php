<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddUserIdToForumsTable extends Migration
{
    public function up()
    {
        // Añadir columna user_id si no existe
        Schema::table('forums', function (Blueprint $table) {
            if (!Schema::hasColumn('forums', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
            }
        });

        // Actualizar las filas con valores válidos
        $defaultUserId = DB::table('users')->orderBy('id')->first()->id;
        DB::table('forums')->whereNull('user_id')->update(['user_id' => $defaultUserId]);

        // Aplicar la restricción de clave externa
        Schema::table('forums', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('forums', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
