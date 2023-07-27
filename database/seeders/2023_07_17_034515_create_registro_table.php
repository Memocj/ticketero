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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 10)->primary();
        });

        Schema::create('registro1', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro1', 10)->primary();
        });

        Schema::create('registro2', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro2', 10)->primary();
        });

        Schema::create('registro3', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro3', 10)->primary();
        });

        Schema::create('registro4', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro4', 10)->primary();
        });

        Schema::create('registro5', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registro5', 10)->primary();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
        Schema::dropIfExists('registro1');
        Schema::dropIfExists('registro2');
        Schema::dropIfExists('registro3');
        Schema::dropIfExists('registro4');
        Schema::dropIfExists('registro5');
    }
};
