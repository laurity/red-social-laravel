<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    // Modificamos la tabla 'posts'
    Schema::table('posts', function (Blueprint $table) {
        // Añadimos una nueva columna 'user_id' que puede ser nula
        $table->unsignedBigInteger('user_id')->nullable();
        // Establecemos 'user_id' como una clave foránea que hace referencia a 'id' en la tabla 'users'
        // Si el usuario correspondiente se elimina, 'user_id' se establecerá en null
        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
