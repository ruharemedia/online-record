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
        Schema::create('record_essences', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('Essence name| example => doctor');
            $table->date('valid_from')->comment('Date start');
            $table->date('valid_to')->nullable()->comment('Date end | if empty, no ending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_essences');
    }
};
