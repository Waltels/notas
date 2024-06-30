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
        Schema::create('ppffs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_apellido');
            $table->string('cipf');
            $table->string('parentesco');
            $table->integer('telefonopf')->nullable();
            $table->string('direccionpf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppffs');
    }
};
