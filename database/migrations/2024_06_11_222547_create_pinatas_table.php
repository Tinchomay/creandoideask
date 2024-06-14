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
        Schema::create('pinatas', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->string('titulo');
            $table->decimal('precio', 8, 2);
            $table->text('descripcion');
            $table->foreignId('categorias_pinata_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinatas');
    }
};
