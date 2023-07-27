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
        Schema::create('atendidos_registro', function (Blueprint $table) {
            $table->id();
            $table->string('numero_r1', 10)->notNull();
            $table->string('numero_r2', 10)->notNull();
            $table->string('numero_r3', 10)->notNull();
            $table->string('numero_r4', 10)->notNull();
            $table->string('numero_r5', 10)->notNull();
            $table->string('numero_rp1', 10)->notNull();
            $table->string('numero_rp2', 10)->notNull();
            $table->string('numero_rp3', 10)->notNull();
            $table->string('numero_rp4', 10)->notNull();
            $table->string('numero_rp5', 10)->notNull();
            $table->date('fecha')->notNull();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atendidos_registro');
    }
};
