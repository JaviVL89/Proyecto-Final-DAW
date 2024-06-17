<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddUserIdToForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('forums', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();

            // Aplica la clave foránea después de asegurar que todos los valores son válidos
        });

        // Asegurarse de que hay al menos un usuario
        if (DB::table('users')->count() == 0) {
            Artisan::call('db:seed', ['--class' => 'DefaultUserSeeder']);
        }

        // Actualizar las filas con valores válidos
        $defaultUserId = DB::table('users')->orderBy('id')->first()->id;
        DB::table('forums')->whereNull('user_id')->update(['user_id' => $defaultUserId]);

        // Aplicar la restricción de clave externa
        Schema::table('forums', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forums', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
