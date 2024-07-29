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
        Schema::create('record_cells', function (Blueprint $table) {
            $table->id();
            $table->time('started_at', precision: 0)->comment("Start time");
            $table->time('end_at', precision: 0)->comment("End time");
            $table->timestamps();

            $table->unique(['started_at', 'end_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_cells');
    }
};
