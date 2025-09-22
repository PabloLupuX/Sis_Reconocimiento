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
        Schema::create('alert_configuration', function (Blueprint $table) {
            $table->id();
            $table->decimal('time', 8, 2)->comment('Tiempo representado en decimal, ej. 5.50');
            $table->unsignedBigInteger('amount')->comment('Cantidad mínima 0, acepta valores muy grandes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alert_configuration');
    }
};
