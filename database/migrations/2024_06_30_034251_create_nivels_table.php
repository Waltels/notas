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
        Schema::create('nivels', function (Blueprint $table) {
            $table->id();
            $table->string('nivel');
            $table->string('turno');
            $table->boolean('estado')->default(false);

            $table->unsignedBigInteger('gestion_id');
            $table->foreign('gestion_id')
                  ->references('id')
                  ->on('gestions')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nivels');
    }
};
