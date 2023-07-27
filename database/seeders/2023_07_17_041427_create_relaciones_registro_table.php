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
        Schema::table('registro1', function (Blueprint $table) {
            $table->foreign('numeroRegistro1')->references('numero')->on('registro');
        });

        Schema::table('registro2', function (Blueprint $table) {
            $table->foreign('numeroRegistro2')->references('numero')->on('registro');
        });

        Schema::table('registro3', function (Blueprint $table) {
            $table->foreign('numeroRegistro3')->references('numero')->on('registro');
        });

        Schema::table('registro4', function (Blueprint $table) {
            $table->foreign('numeroRegistro4')->references('numero')->on('registro');
        });

        Schema::table('registro5', function (Blueprint $table) {
            $table->foreign('numeroRegistro5')->references('numero')->on('registro');
        });

        Schema::table('registroP1', function (Blueprint $table) {
            $table->foreign('numeroRegistroP1')->references('numero')->on('registroPreferencial');
        });

        Schema::table('registroP2', function (Blueprint $table) {
            $table->foreign('numeroRegistroP2')->references('numero')->on('registroPreferencial');
        });

        Schema::table('registroP3', function (Blueprint $table) {
            $table->foreign('numeroRegistroP3')->references('numero')->on('registroPreferencial');
        });

        Schema::table('registroP4', function (Blueprint $table) {
            $table->foreign('numeroRegistroP4')->references('numero')->on('registroPreferencial');
        });

        Schema::table('registroP5', function (Blueprint $table) {
            $table->foreign('numeroRegistroP5')->references('numero')->on('registroPreferencial');
        });

        Schema::table('atendidosRegistro', function (Blueprint $table) {
            $table->foreign('numeroR1')->references('numeroRegistro1')->on('registro1');
            $table->foreign('numeroR2')->references('numeroRegistro2')->on('registro2');
            $table->foreign('numeroR3')->references('numeroRegistro3')->on('registro3');
            $table->foreign('numeroR4')->references('numeroRegistro4')->on('registro4');
            $table->foreign('numeroR5')->references('numeroRegistro5')->on('registro5');
            $table->foreign('numeroRP1')->references('numeroRegistroP1')->on('registroP1');
            $table->foreign('numeroRP2')->references('numeroRegistroP2')->on('registroP2');
            $table->foreign('numeroRP3')->references('numeroRegistroP3')->on('registroP3');
            $table->foreign('numeroRP4')->references('numeroRegistroP4')->on('registroP4');
            $table->foreign('numeroRP5')->references('numeroRegistroP5')->on('registroP5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registro1', function (Blueprint $table) {
            $table->dropForeign('numeroRegistro1');
        });

        Schema::table('registro2', function (Blueprint $table) {
            $table->dropForeign('numeroRegistro2');
        });

        Schema::table('registro3', function (Blueprint $table) {
            $table->dropForeign('numeroRegistro3');
        });

        Schema::table('registro4', function (Blueprint $table) {
            $table->dropForeign('numeroRegistro4');
        });

        Schema::table('registro5', function (Blueprint $table) {
            $table->dropForeign('numeroRegistro5');
        });

        Schema::table('registroP1', function (Blueprint $table) {
            $table->dropForeign('numeroRegistroP1');
        });

        Schema::table('registroP2', function (Blueprint $table) {
            $table->dropForeign('numeroRegistroP2');
        });

        Schema::table('registroP3', function (Blueprint $table) {
            $table->dropForeign('numeroRegistroP3');
        });

        Schema::table('registroP4', function (Blueprint $table) {
            $table->dropForeign('numeroRegistroP4');
        });

        Schema::table('registroP5', function (Blueprint $table) {
            $table->dropForeign('numeroRegistroP5');
        });

        Schema::table('atendidosRegistro', function (Blueprint $table) {
            $table->dropForeign('numeroR1');
            $table->dropForeign('numeroR2');
            $table->dropForeign('numeroR3');
            $table->dropForeign('numeroR4');
            $table->dropForeign('numeroR5');
            $table->dropForeign('numeroRP1');
            $table->dropForeign('numeroRP2');
            $table->dropForeign('numeroRP3');
            $table->dropForeign('numeroRP4');
            $table->dropForeign('numeroRP5');
        });
    }
};
