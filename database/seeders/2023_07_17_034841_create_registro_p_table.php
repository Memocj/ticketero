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
        Schema::create('registros_preferenciales', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 10)->primary();
        });

        Schema::create('registro_p1', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro_p1', 10)->primary();
        });

        Schema::create('registro_p2', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro_p2', 10)->primary();
        });

        Schema::create('registro_p3', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro_p3', 10)->primary();
        });

        Schema::create('registro_p4', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro_p4', 10)->primary();
        });

        Schema::create('registro_p5', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro_p5', 10)->primary();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros_preferenciales');
        Schema::dropIfExists('registro_p1');
        Schema::dropIfExists('registro_p2');
        Schema::dropIfExists('registro_p3');
        Schema::dropIfExists('registro_p4');
        Schema::dropIfExists('registro_p5');
    }
};
